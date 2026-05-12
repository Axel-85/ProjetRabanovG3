using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace ProjetRabanovG3
{
    public class GestionFidelite
    {
        public static int CalculerPoints(Client client)
        {
            client.PointsFidelite = client.Sejours.Count * 20;
        }
        public static StatutFidelite DeterminerStatut(int points)
        {
            if(points < 200)
            {
                return new StatutBronze();
            }
            else if (points < 500)
            {
                return new StatutArgent();
            }
            else
            {
                return new StatutOr();
            }
        }
    }
}