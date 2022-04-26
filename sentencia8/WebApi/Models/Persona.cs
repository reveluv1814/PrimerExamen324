using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace WebApi.Models
{
    public class Persona
    {
        public int IdPersona { get; set; }
        public int IdAcceso { get; set; }
        public string Ci { get; set; }
        public string NombreC { get; set; }
        public DateTime FechaNac { get; set; }
        public string Departamento { get; set; }

        /**Atributos de Acceso*/
        public string Nick { get; set; }
        public string Pass { get; set; }
        /*Artibuto de rol*/
        public int Rol { get; set; }

    }
}
