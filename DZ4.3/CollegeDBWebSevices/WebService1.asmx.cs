using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Services;
using System.Windows;

namespace CollegeDBWebServices
{
    /// <summary>
    /// Summary description for WebService1
    /// </summary>
    [WebService(Namespace = "http://tempuri.org/")]
    [WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
    [System.ComponentModel.ToolboxItem(false)]
    // To allow this Web Service to be called from script, using ASP.NET AJAX, uncomment the following line. 
    // [System.Web.Script.Services.ScriptService]




    public class WebService1 : System.Web.Services.WebService
    {
        public string data2txt;


        [WebMethod]
        public string HelloWorld()
        {
            return "Hello World";
        }

        [WebMethod]
        public int GetSquare(int a)
        {
            return (a * a);
        }

        [System.Web.Services.WebMethod]
        public string GetInfoStudent(int id)
        {


            MySql.Data.MySqlClient.MySqlConnection conn;
            string myConnectionString;

            myConnectionString = "server=localhost;uid=root;" + "database=university";


            string sql = "SELECT * FROM students WHERE StudentId=" + id.ToString();

            conn = new MySql.Data.MySqlClient.MySqlConnection();
            conn.ConnectionString = myConnectionString;

            conn.Open();

            MySqlCommand cmd = new MySqlCommand(sql, conn);
            MySqlDataReader reader = cmd.ExecuteReader();
            data2txt = string.Empty;

            while (reader.Read())
            {

                data2txt += $"StudentId: {reader.GetString("StudentId")} <br>"
                    + $"Ime: {reader.GetString("Name")} <br>"
                    + $"Faculties_FacultyId: {reader.GetString("Faculties_FacultyId")}  <br>"
                    ;

            }
            if (string.IsNullOrEmpty(data2txt))
            {
                return "Student ne postoji!";
            }
            else
            {

                return data2txt;
            }
        }
    }
}
