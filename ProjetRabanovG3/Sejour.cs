using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace ProjetRabanovG3
{
    public class Sejour
    {
        private DateTime dateDebut;
        private DateTime dateFin;

        public Sejour(DateTime dateDebut, DateTime dateFin)
        {
            this.DateDebut = dateDebut;
            this.DateFin = dateFin;
        }

        public DateTime DateDebut { get => dateDebut; set => dateDebut = value; }
        public DateTime DateFin { get => dateFin; set => dateFin = value; }
    }
}