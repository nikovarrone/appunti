Imports MySql.Data.MySqlClient

Public Class Form1

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        Dim conn As MySqlConnection
        Dim command As MySqlCommand
        Dim reader As MySqlDataReader

        conn = New MySqlConnection("host=localhost; database=scuola; user=root; ")
        conn.Open()

        command = New MySqlCommand("select * from studenti;", conn)
        reader = command.ExecuteReader()

        While (reader.Read())
            MessageBox.Show(reader.GetString("cognome"))

        End While

        conn.Close()

    End Sub

    Private Sub Form1_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load

    End Sub
End Class
