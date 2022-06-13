<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="WebFormKlijentApp.aspx.cs" Inherits="CollegeDBWebServices.WebFormKlijentApp" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        <p>
            Primjer web servisa studenata UniversityDatabase</p>
        <p>
            <asp:Label ID="Label1" runat="server" Text="StudentId:"></asp:Label>
            <br />
            <asp:TextBox ID="InputBroj" runat="server"></asp:TextBox>
            <asp:Button ID="BtnPoziv" runat="server" OnClick="BtnPoziv_Click" Text="Poziv web servisa" />
        </p>
        <p>
            <asp:Label ID="LblRezultat" runat="server"></asp:Label>
        </p>
    </form>
</body>
</html>
