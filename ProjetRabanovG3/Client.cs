using System;
using System.Collections.Generic;
using System.Linq;
using System.Security.Cryptography;
using System.Web;

namespace ProjetRabanovG3
{
    public class Client
    {
        private int idClient; 
        private string nom;
        private string prenom;
        private List<Sejour> sejours;
        private StatutFidelite statut;
        private int pointsFidelite;

        public Client(int idClient, string nom, string prenom)
        {
            this.IdClient = idClient;
            this.Nom = nom;
            this.Prenom = prenom;
            this.Sejours = new List<Sejour>();
            
        }

        public int IdClient { get => idClient; set => idClient = value; }
        public string Nom { get => nom; set => nom = value; }
        public string Prenom { get => prenom; set => prenom = value; }
        public List<Sejour> Sejours { get => sejours; set => sejours = value; }
        public StatutFidelite Statut { get => statut; set => statut = value; }
        public int PointsFidelite { get => pointsFidelite; set => pointsFidelite = value; }
    }
}