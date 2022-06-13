<%@ Page Language="vb" AutoEventWireup="false" CodeBehind="WebFormKlijentApp.aspx.vb" Inherits="FSREWebServices.WebFormKlijentApp" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        <div>
        </div>
        BAM to EUR web servis
        <p>
            <asp:TextBox ID="InputBroj" runat="server"></asp:TextBox>
            <asp:Button ID="BtnPoziv" runat="server" Text="Poziv web servisa" />
            <asp:Label ID="LblRezultat" runat="server" Text="Label"></asp:Label>
        </p>
    </form>
</body>
</html>
