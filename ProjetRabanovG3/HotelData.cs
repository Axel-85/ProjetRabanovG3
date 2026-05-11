using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace ProjetRabanovG3
{
    public class HotelData
    {
       using Microsoft.Ajax.Utilities;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using MySqlConnector;
using System.Configuration;
using System.Data;

namespace ProjetRabanovG3
    {
        internal List<Client> ChargerClients()
        {
            List<Client> clients = new List<Client>();

            string connectionString = "Server=192.168.37.155;Database=###;User ID=hotel_user;Password=###;";

            using (MySqlConnection connexion = new MySqlConnection(connectionString))
            {
                connexion.Open();

                using (MySqlCommand cmd = new MySqlCommand())
                {
                    cmd.Connection = connexion;
                    cmd.CommandText = "SELECT id, nom, prenom FROM client";

                    using (MySqlDataAdapter adapter = new MySqlDataAdapter(cmd))
                    {
                        DataTable table = new DataTable();
                        adapter.Fill(table);

                        foreach (DataRow row in table.Rows)
                        {
                            Client client = new Client(Convert.ToInt32(row["id"]), row["nom"].ToString(), row["prenom"].ToString());

                            clients.Add(client);
                        }
                    }
                }
            }

            return clients;
        }


        internal List<Sejour> ChargerSejours(int clientId)
        {
            List<Sejour> sejours = new List<Sejour>();

            string connectionString = "Server=192.168.37.155;Database=###;User ID=###;Password=###;";

            using (MySqlConnection connexion = new MySqlConnection(connectionString))
            {
                using (MySqlCommand cmd = new MySqlCommand())
                {
                    cmd.Connection = connexion;
                    cmd.CommandText = $"SELECT date_debut, date_fin FROM sejour WHERE client_id = {clientId}";
                    // cmd.Parameters.AddWithValue("@clientId", clientId);

                    using (MySqlDataAdapter adapter = new MySqlDataAdapter(cmd))
                    {
                        DataTable table = new DataTable();
                        adapter.Fill(table);

                        foreach (DataRow row in table.Rows)
                        {
                            Sejour sejour = new Sejour(Convert.ToDateTime(row["date_debut"]), Convert.ToDateTime(row["date_fin"]));

                            //test
                            sejours.Add(sejour);
                        }
                    }
                }
            }

            return sejours;
        }
}