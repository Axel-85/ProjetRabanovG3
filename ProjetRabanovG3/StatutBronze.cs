using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace ProjetRabanovG3
{
    class StatutBronze : StatutFidelite
    {
       public override decimal ObtenirReduction()
        {
            return 0.0m;
        }

        public override bool AAccesLounge()
        {
            return false; 
        }

        public override bool PetitDejeunerOffert()
        {
            return false;
        }

        public override string NomStatut()
        {
            return "Bronze";
        }
    }
}