using Npgsql;
using System;
using System.Collections.Generic;
using System.Configuration;
using System.Data;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Windows.Forms;

namespace Sentencia8
{
    public partial class Sentencia : System.Web.UI.Page
    {
        public string id = "";
        protected void Page_Load(object sender, EventArgs e)
        {
            nomostrar();
            nomostrarAgre();
            AgregarPersona.Visible = true;

            NpgsqlConnection conexion = new NpgsqlConnection(ConfigurationManager.ConnectionStrings["postgres"].ConnectionString);
            conexion.Open();
            NpgsqlCommand comand = new NpgsqlCommand("SELECT * FROM persona order by id_persona", conexion);
            NpgsqlDataAdapter ad = new NpgsqlDataAdapter(comand);
            DataTable dt = new DataTable();
            ad.Fill(dt);
            grilla.DataSource = dt;
            grilla.DataBind();
            conexion.Close();
        }

        protected void Editar_Click(object sender, EventArgs e)
        {
            mostrar();
            nomostrarAgre();
            AgregarPersona.Visible = false;

            int rowind = ((GridViewRow)(sender as System.Web.UI.Control).NamingContainer).RowIndex;
            grilla.Visible = false;
            TextBoxPersona.Text = grilla.Rows[rowind].Cells[0].Text;
            TextBoxIdAcceso.Text = grilla.Rows[rowind].Cells[1].Text;
            TextBoxCi.Text = grilla.Rows[rowind].Cells[2].Text;
            TextBoxNombre.Text = grilla.Rows[rowind].Cells[3].Text;
            TextBoxFecha.Text = grilla.Rows[rowind].Cells[4].Text;
            for (int i = 0; i <= SelectDepa.Items.Count - 1; i++)
            {
                if (SelectDepa.Items[i].Value == grilla.Rows[rowind].Cells[5].Text)
                    SelectDepa.Items[i].Selected = true;
                else SelectDepa.Items[i].Selected = false;
            }
        }
        protected void edi_Click(object sender, EventArgs e)
        {
            nomostrarAgre();
            nomostrar();
            grilla.Visible = true;
            AgregarPersona.Visible = true;
            string fecha = "";
            for (int i = 0; i <= SelectDepa.Items.Count - 1; i++)
            {
                if (SelectDepa.Items[i].Selected)
                    fecha = SelectDepa.Items[i].Value;
            }

            NpgsqlConnection conexion = new NpgsqlConnection(ConfigurationManager.ConnectionStrings["postgres"].ConnectionString);
            conexion.Open();
            NpgsqlCommand comand = new NpgsqlCommand("UPDATE persona SET id_acceso =" + TextBoxIdAcceso.Text.ToString().Trim() + ", ci =" + TextBoxCi.Text.ToString().Trim() + ", nombre_c ='" + TextBoxNombre.Text.ToString().Trim() + "', departamento ='" + fecha.ToString().Trim() + "'  where id_persona =" + TextBoxPersona.Text.ToString().Trim() + "", conexion);
            NpgsqlDataAdapter ad = new NpgsqlDataAdapter(comand);
            DataTable dtt = new DataTable();
            ad.Fill(dtt);
            NpgsqlCommand comand2 = new NpgsqlCommand("SELECT * FROM persona order by id_persona", conexion);
            NpgsqlDataAdapter ad2 = new NpgsqlDataAdapter(comand2);
            DataTable dt = new DataTable();
            ad2.Fill(dt);

            grilla.DataSource = dt;
            grilla.DataBind();

            conexion.Close();

        }
        protected void AgregarPersona_Click(object sender, EventArgs e)
        {
            mostrarAgre();
            AgregarPersona.Visible = false;
            nomostrar();
            grilla.Visible = false;
        }
        protected void crear_Click(object sender, EventArgs e)
        {
            nomostrar();
            nomostrarAgre();
            grilla.Visible = true;
            string depa = "";
            string rol = "";
            for (int i = 0; i <= SelectCDepa.Items.Count - 1; i++)
            {
                if (SelectCDepa.Items[i].Selected)
                    depa = SelectCDepa.Items[i].Value.ToString();
            }
            for (int i = 0; i <= SelectCRol.Items.Count - 1; i++)
            {
                if (SelectCRol.Items[i].Selected)
                    rol = SelectCRol.Items[i].Value.ToString();
            }
            NpgsqlConnection conexion = new NpgsqlConnection(ConfigurationManager.ConnectionStrings["postgres"].ConnectionString);
            conexion.Open();
            NpgsqlCommand comand = new NpgsqlCommand("INSERT INTO acceso (usuario, password) values ('"+TextBoxCNUsuario.Text.ToString().Trim()+"', '"+Password1.Value.ToString().Trim()+"')", conexion);
            NpgsqlDataAdapter ad1 = new NpgsqlDataAdapter(comand);
            DataTable dt1 = new DataTable();
            ad1.Fill(dt1);
           
            
            NpgsqlCommand comand1 = new NpgsqlCommand("INSERT INTO persona (id_acceso, ci, nombre_c, fecha_nac, departamento) values ((SELECT id_acceso from acceso WHERE usuario='"+ TextBoxCNUsuario.Text.ToString().Trim() + "' and password='"+ Password1.Value.ToString().Trim() + "' LIMIT 1),'"+TextBoxCCI.Text.ToString().Trim()+"','"+TextBoxCNombre.Text.ToString().Trim()+"','"+TextBoxCFecha.Text.ToString().Trim()+"','"+depa.ToString().Trim()+"')", conexion);
            NpgsqlDataAdapter ad2 = new NpgsqlDataAdapter(comand1);
            DataTable dt2 = new DataTable();
            ad2.Fill(dt2);

            NpgsqlCommand comand2 = new NpgsqlCommand("INSERT INTO tiene (id_persona, id_rol) values ((SELECT id_persona from persona WHERE ci='"+TextBoxCCI.Text.ToString().Trim()+"' LIMIT 1),'"+rol.ToString().Trim()+"')", conexion);
            NpgsqlDataAdapter ad3 = new NpgsqlDataAdapter(comand2);
            DataTable dt3 = new DataTable();
            ad3.Fill(dt3);

            NpgsqlCommand comand3 = new NpgsqlCommand("SELECT * FROM persona order by id_persona", conexion);
            NpgsqlDataAdapter ad4 = new NpgsqlDataAdapter(comand3);
            DataTable dt4 = new DataTable();
            ad4.Fill(dt4);

            grilla.DataSource = dt4;
            grilla.DataBind();

            conexion.Close();
        }
        protected void Eliminar_Click(object sender, EventArgs e)
        {
            int rowind = ((GridViewRow)(sender as System.Web.UI.Control).NamingContainer).RowIndex;
            Label1.Text = grilla.Rows[rowind].Cells[0].Text;
            Label2.Text = grilla.Rows[rowind].Cells[1].Text;
            AgregarPersona.Visible = true;
            NpgsqlConnection conexion = new NpgsqlConnection(ConfigurationManager.ConnectionStrings["postgres"].ConnectionString);
            conexion.Open();
            NpgsqlCommand comand = new NpgsqlCommand("DELETE FROM persona where id_persona ="+Label1.Text.ToString().Trim() + "", conexion);
            NpgsqlDataAdapter ad = new NpgsqlDataAdapter(comand);
            DataTable dtt = new DataTable();
            ad.Fill(dtt);

            NpgsqlCommand comand1 = new NpgsqlCommand("DELETE FROM acceso where id_acceso =" + Label2.Text.ToString().Trim() + "", conexion);
            NpgsqlDataAdapter ad1 = new NpgsqlDataAdapter(comand1);
            DataTable dtt1 = new DataTable();
            ad1.Fill(dtt1);

            NpgsqlCommand comand2 = new NpgsqlCommand("SELECT * FROM persona order by id_persona", conexion);
            NpgsqlDataAdapter ad2 = new NpgsqlDataAdapter(comand2);
            DataTable dt = new DataTable();
            ad2.Fill(dt);
            grilla.DataSource = dt;
            grilla.DataBind();

            conexion.Close();

        }
        public void mostrarAgre()
        {
            LabelAgregar.Visible = true;
            LabelCCI.Visible = true;
            LabelCNombre.Visible = true;
            LabelCFecha.Visible = true;
            LabelCDepa.Visible = true;
            LabelCNomUs.Visible = true;
            LabelCPass.Visible = true;
            LabelCRol.Visible = true;
            crear.Visible = true;
            TextBoxCCI.Visible=true;
            TextBoxCNombre.Visible=true;
            TextBoxCFecha.Visible=true;
            SelectCDepa.Visible=true;
            TextBoxCNUsuario.Visible =true;
            Password1.Visible=true;
            SelectCRol.Visible=true;
            
        }
        public void nomostrarAgre()
        {
            LabelAgregar.Visible = false;
            LabelCCI.Visible = false;
            LabelCNombre.Visible = false;
            LabelCFecha.Visible = false;
            LabelCDepa.Visible = false;
            LabelCNomUs.Visible = false;
            LabelCPass.Visible = false;
            LabelCRol.Visible = false;
            crear.Visible = false;
            TextBoxCCI.Visible = false;
            TextBoxCNombre.Visible = false;
            TextBoxCFecha.Visible = false;
            SelectCDepa.Visible = false;
            TextBoxCNUsuario.Visible = false;
            Password1.Visible = false;
            SelectCRol.Visible = false;
            
        }
        public void mostrar()
        {
            TextBoxIdAcceso.Visible = true;
            TextBoxCi.Visible = true;
            TextBoxNombre.Visible = true;
            TextBoxFecha.Visible = true;
            SelectDepa.Visible = true;
            edi.Visible = true;
            LabelEditar.Visible = true;
            LabelIdAcceso.Visible = true;
            LabelCI.Visible = true;
            LabelNombre.Visible = true;
            LabelNac.Visible = true;
            LabelDepa.Visible = true;
           
        }
        public void nomostrar()
        {
            LabelEditar.Visible = false;
            LabelIdAcceso.Visible = false;
            LabelCI.Visible = false;
            LabelNombre.Visible = false;
            LabelNombre.Visible = false;
            LabelDepa.Visible = false;
            LabelNac.Visible = false;
            TextBoxIdAcceso.Visible = false;
            TextBoxCi.Visible = false;
            TextBoxNombre.Visible = false;
            TextBoxFecha.Visible = false;
            SelectDepa.Visible = false;
            TextBoxPersona.Visible = false;
            edi.Visible = false;
            
        }
    }
}