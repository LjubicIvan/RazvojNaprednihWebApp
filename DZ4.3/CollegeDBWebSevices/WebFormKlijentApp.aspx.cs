using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Security;
using System.Runtime.ConstrainedExecution;
using System.Security.Cryptography.X509Certificates;
using System.Security.Cryptography.X509Certificates;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;


namespace CollegeDBWebServices
{
    
    public partial class WebFormKlijentApp : System.Web.UI.Page
    {
            
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void BtnPoziv_Click(object sender, EventArgs e)
        {
            System.Net.ServicePointManager.ServerCertificateValidationCallback = delegate { return true; };

            KlijentAplikacija4.WebService1SoapClient klijent = new KlijentAplikacija4.WebService1SoapClient("WebService1Soap");
            int broj;
            bool res = int.TryParse(InputBroj.Text, out broj);
            if (!res)
            {
                LblRezultat.Text = "Polje je prazno!";
            }
            else
            {
                string rezultat = klijent.GetInfoStudent(broj);
                LblRezultat.Text = rezultat;
            }
        }
    }


}
