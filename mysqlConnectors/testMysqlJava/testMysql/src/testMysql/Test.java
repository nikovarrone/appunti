package testMysql;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;


public class Test {

	public static void main(String[] args) throws ClassNotFoundException, SQLException {
		
		String stringaConn  = null;
		Connection conn = null;            // usare oggetti del package java.sql

		// carica driver
		String nomeClasse="com.mysql.jdbc.Driver";
		Class.forName(nomeClasse);

		// apre connessione
		stringaConn="jdbc:mysql://localhost/scuola?user=root&password=";
		conn=DriverManager.getConnection(stringaConn);
		// non serve apertura (implicita nella getConnection)


		String selectSQL = "select * from studenti";
		PreparedStatement preparedStatement = conn.prepareStatement(selectSQL);
		ResultSet rs = preparedStatement.executeQuery(selectSQL );
		while (rs.next()) {
			System.out.println(rs.getString("cognome"));
		}
		
		preparedStatement.close();
		
		conn.close();;

		
	}

}
