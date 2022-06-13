Public Class WebFormKlijentApp
    Inherits System.Web.UI.Page

    Private klijent As Object

    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load

    End Sub



    Protected Sub BtnPoziv_Click(sender As Object, e As EventArgs) Handles BtnPoziv.Click

        Dim klijent As ServiceReference1.WebService1SoapClient = New ServiceReference1.WebService1SoapClient("WebService1Soap")
        Dim p As Integer = Integer.Parse(InputBroj.Text)
        Dim p1 As String = klijent.BAMtoEUR(p)
        LblRezultat.Text = "rezultat je: " + p1







    End Sub

End Class