using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace ProjetRabanovG3
{
    class StatutOr : StatutFidelite
    {
        public override decimal ObtenirReduction()
        {
            return 0.10m;
        }


        public override bool AAccesLounge()
        {
            return true; 
        }

        public override bool PetitDejeunerOffert()
        {
            return true;
        }

        public override string NomStatut()
        {
            return "Or";
        }
    }
}