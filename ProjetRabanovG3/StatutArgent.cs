using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace ProjetRabanovG3
{
    class StatutArgent : StatutFidelite
    {
        public override decimal ObtenirReduction()
        {
            return 0.05m;
        }

        public override bool AAccesLounge()
        {
            return false; 
        }

        public override bool PetitDejeunerOffert()
        {
            return true;
        }

        public override string NomStatut()
        {
            return "Argent";
        }
    }
}