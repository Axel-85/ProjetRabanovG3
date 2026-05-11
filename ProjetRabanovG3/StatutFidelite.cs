using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace ProjetRabanovG3
{
    abstract class StatutFidelite
    {
        public abstract decimal ObtenirReduction();
        public virtual bool AAccesLounge()
        {
            return false;
        }
        public virtual bool PetitDejeunerOffert()
        {
            return false;
        }
        public virtual string NomStatut()
        {  
            return "Bronze";
        }
    }
}