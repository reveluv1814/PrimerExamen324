<?php

namespace App\Controllers;

use App\Models\PersonaModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Persona extends ResourceController 
{
	use ResponseTrait;
	
    // fetch all user records
	public function index()
    {	
		$model = new PersonaModel();
		
		$data = $model->findAll();
		
		return $this->respond($data);
    }
	
	// create new user records
	public function create()
    {	
        $model = new PersonaModel();
		
		$rules = [
            'id_persona' => 'required',
            'id_acceso,'=> 'required',
            'ci'=> 'required',
            'nombre_c'=> 'required',
            'fecha_nac'=> 'required',
            'deparatamento'=> 'required'
		];
		
		if(!$this->validate($rules))
		{
			return $this->fail($this->validator->getErrors());
		}
		else
		{
			$data = [
				'id_persona' => $this->request->getVar("id_persona"),
				'id_acceso' => $this->request->getVar("id_acceso"),
                'ci' => $this->request->getVar("ci"),
                'nombre_c' => $this->request->getVar("nombre_c"),
                'fecha_nac' => $this->request->getVar("fecha_nac"),
                'deparatamento' => $this->request->getVar("deparatamento"),
			];
		}

		$model->insert($data);

		$response = [ 
			'message' => 'Persona Inserted Successfully'	
		];
				
		return $this->respondCreated($response);
	
    }
	
	//fetch user record from specific id 
	public function show($id = null)
	{
		$model = new PersonaModel();
		
		$data = $model->where(['id_persona' => $id])->first();
		
		if($data)
		{	
			return $this->respond($data);
		}
		else
		{
			return $this->failNotFound('No User Found with id' . $id);
		}
		
	}
	// update existing user records
    public function update($id = null)
    {
        $model = new PersonaModel();
		
		$rules = [
			'id_persona' => 'required',
            'id_acceso,'=> 'required',
            'ci'=> 'required',
            'nombre_c'=> 'required',
            'fecha_nac'=> 'required',
            'deparatamento'=> 'required'
		];
		
		if(!$this->validate($rules))
		{
			return $this->fail($this->validator->getErrors());
		}
		else
		{
			$data = [
				'id_persona' => $this->request->getVar("id_persona"),
				'id_acceso' => $this->request->getVar("id_acceso"),
                'ci' => $this->request->getVar("ci"),
                'nombre_c' => $this->request->getVar("nombre_c"),
                'fecha_nac' => $this->request->getVar("fecha_nac"),
                'deparatamento' => $this->request->getVar("deparatamento"),
			];
		}

        $model->update($id, $data);
		
		$response = [ 
			'message' => 'Persona Updated Successfully',
			'data' => $data	
		];

		return $this->respond($response);
		
    }

	// delete existing user records
	public function delete($id = null)
    {
        $model = new PersonaModel();

		$data = $model->find($id);
		
		if($data)
		{
			$model->delete($id);
			
			$response = [
				'message' => 'Persona Deleted Successfully'
			];
			
			return $this->respondDeleted($response);
		}
		else
		{
			return $this->failNotFound('No Data Found with id' . $id);
		}
    }
}