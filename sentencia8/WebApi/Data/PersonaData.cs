using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using WebApi.Models;
using Npgsql;
using System.Data;

namespace WebApi.Data
{
    public class PersonaData
    {
        public static bool Registrar(Persona oPersona)
        {
                        
            using (NpgsqlConnection oConexion = new NpgsqlConnection(Conexion.rutaConexion))
            {
                NpgsqlCommand cmd = new NpgsqlCommand("SELECT inserta_persona('"+ oPersona.Nick+ "', '"+ oPersona.Pass + "', '"+ oPersona.Ci + "', '"+ oPersona.NombreC + "', '"+ oPersona.FechaNac + "', '"+ oPersona.Departamento + "' ,"+ oPersona.Rol + ")", oConexion);
             
                try
                {
                    oConexion.Open();
                    cmd.ExecuteNonQuery();
                    return true;
                }
                catch (Exception ex)
                {
                    return false;
                }
            }
        }

        public static bool Modificar(Persona oPersona)
        {
            using (NpgsqlConnection oConexion = new NpgsqlConnection(Conexion.rutaConexion))
            {
                NpgsqlCommand cmd = new NpgsqlCommand("UPDATE persona SET ci= '"+oPersona.Ci+"', nombre_c='"+oPersona.NombreC+"', fecha_nac='"+oPersona.FechaNac+"', departamento='"+oPersona.Departamento+"' WHERE id_persona="+oPersona.IdPersona+"", oConexion);
               
                try
                {
                    oConexion.Open();
                    cmd.ExecuteNonQuery();
                    return true;
                }
                catch (Exception ex)
                {
                    return false;
                }
            }
        }

        public static List<Persona> Listar()
        {
            List<Persona> oListaPersona = new List<Persona>();
            using (NpgsqlConnection oConexion = new NpgsqlConnection(Conexion.rutaConexion))
            {
                NpgsqlCommand cmd = new NpgsqlCommand("SELECT * FROM persona", oConexion);
                
                try
                {
                    oConexion.Open();
                    cmd.ExecuteNonQuery();

                    using (NpgsqlDataReader dr = cmd.ExecuteReader())
                    {

                        while (dr.Read())
                        {
                            oListaPersona.Add(new Persona()
                            {
                                IdPersona = Convert.ToInt32(dr["id_persona"]),
                                IdAcceso = Convert.ToInt32(dr["id_acceso"]),
                                Ci = dr["ci"].ToString(),
                                NombreC = dr["nombre_c"].ToString(),
                                FechaNac = Convert.ToDateTime(dr["fecha_nac"].ToString()),
                                Departamento = dr["departamento"].ToString()
                                
                            });
                        }

                    }

                    return oListaPersona;
                }
                catch (Exception ex)
                {
                    return oListaPersona;
                }
            }
        }

        public static Persona Obtener(int idpersona)
        {
            Persona oPersona = new Persona();
            using (NpgsqlConnection oConexion = new NpgsqlConnection(Conexion.rutaConexion))
            {
                NpgsqlCommand cmd = new NpgsqlCommand("SELECT * FROM persona where id_persona="+idpersona+"", oConexion);

                try
                {
                    oConexion.Open();
                    //cmd.ExecuteNonQuery();

                    using (NpgsqlDataReader dr = cmd.ExecuteReader())
                    {

                        while (dr.Read())
                        {
                            oPersona = new Persona()
                            {
                                IdPersona = Convert.ToInt32(dr["id_persona"]),
                                IdAcceso = Convert.ToInt32(dr["id_acceso"]),
                                Ci = dr["ci"].ToString(),
                                NombreC = dr["nombre_c"].ToString(),
                                FechaNac = Convert.ToDateTime(dr["fecha_nac"].ToString()),
                                Departamento = dr["departamento"].ToString()
                            };
                        }

                    }



                    return oPersona;
                }
                catch (Exception ex)
                {
                    return oPersona;
                }
            }
        }

        public static bool Eliminar(int id)
        {
            using (NpgsqlConnection oConexion = new NpgsqlConnection(Conexion.rutaConexion))
            {
                NpgsqlCommand cmd = new NpgsqlCommand("DELETE FROM persona where id_persona="+id+"", oConexion);
                
                try
                {
                    oConexion.Open();
                    cmd.ExecuteNonQuery();
                    return true;
                }
                catch (Exception ex)
                {
                    return false;
                }
            }
        }

    }
}
