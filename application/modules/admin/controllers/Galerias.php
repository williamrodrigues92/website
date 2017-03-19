<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galerias extends ADMIN_Controller {

	public function index () {

		$this->inserirSEO( 'Galeria de Fotos', '', '', 'admin/galerias' );

    $this->addDataTable();

		$this->data['rows'] = $this->galerias_model->get_all();

		$this->exibirPagina('galerias/index');
	}

	public function form ( $id = NULL ) {

		$this->inserirSEO( 'Cadastro', '', '', 'admin/galerias' );

    $this->addTinyMCE();

		$this->data['action'] 	 = 'admin/galerias/form';

		$this->form_validation->set_rules('titulo', 'Título', 'required');

		// CADASTRAR / ALTERAR
		if ( $this->input->post() ) {

			if ( $this->form_validation->run() == TRUE ) {

				$data         = $this->input->post();
				$data['data'] = inserirData($this->input->post('data'));

				if ( $id ) {
					$this->galerias_model->update($data, $id);
				} else {
					$id = $this->galerias_model->insert($data);
				}

        $this->addResposta('success', 'Dados salvos com sucesso!');
      } else {
        $this->addResposta('danger', 'Erro ao efetuar cadastro! Contate o administrador.');
      }
		}

		// PREENCHER CAMPOS
		if ( $id ) {

			$row = $this->galerias_model->get($id);

			if ( $row ) {
				$this->data['action'] = 'admin/galerias/form/' . $id;
				$this->data['row']    = get_object_vars($row);
			} else {
				redirect('admin/galerias/form');
			}

		} else {
			$this->data['row'] = $this->galerias_model->get_columns_null();
		}

		$this->exibirPagina('galerias/form');
	}

	public function fotos ( $id ) {

		$this->inserirSEO( 'Fotos', '', '', 'admin/galerias/fotos' );

		$this->addRecurso('fotos.js', 'js');

		$this->data['action'] 	  = 'admin/galerias/fotos/' . $id;
		$this->data['id_galeria'] = $id;

		// CADASTRAR / ALTERAR
		if ( $this->input->post() ) {

			$data = $this->input->post();

			if ( isset($_FILES['imagem']) ) {

				$filename = time();
				$foo = new Upload($_FILES['imagem']);

				if ( $foo->uploaded && $foo->file_is_image ) {
					$foo->file_new_name_body     = $filename;
					$foo->image_convert          = "jpg";
					/*$foo->image_resize           = true;
					$foo->image_ratio_fill       = true;
					$foo->image_x                = 800;
					$foo->image_y                = 600;
					$foo->image_background_color = "#FFFFFF";
					$foo->image_ratio_no_zoom_in = true;*/

					$dirname = './uploads/galerias/'.$id;

					$foo->Process($dirname);

					if ( $foo->processed ) {
						$data['imagem'] 		= $filename . '.jpg';
						$data['id_galeria'] = $id;

						$this->fotos_model->insert($data);

						$this->addResposta('success', 'Foto cadastrada com sucesso!');
					} else {
						$this->addResposta('danger', 'Erro no envio da foto!');
					}
				} else {
					$this->addResposta('danger', 'Seleciona uma foto!');
				}
			}
		}

		$this->data['galeria'] = $this->galerias_model->get($id);
		$this->data['rows']    = $this->fotos_model->getFotosById($id);

		$this->exibirPagina('galerias/fotos');
	}

	public function ordenar ( $id ) {

		// CADASTRAR / ALTERAR
		if ( $this->input->post() ) {

			$this->addResposta('success', 'Fotos ordenadas com sucesso!');

			$data['id_galeria'] = $id;

			$ordem = $this->input->post('ordem');

			foreach ( $ordem as $key => $value ) {
				$data['ordem'] = $key;
				$this->fotos_model->atualizar($value, $data);
			}
		}

		redirect('admin/galerias/fotos/' . $id);
	}

	public function remover ( $id ) {
		$this->galerias_model->update(array('excluido' => time()), $id);
		redirect('admin/galerias');
	}

	public function remover_foto ( $id ) {

		$fotos = $this->fotos_model->get($id);
		unlink('uploads/galerias/'.$fotos->id_galeria.'/'.$fotos->foto);

		$this->fotos_model->delete($id);
		redirect('admin/galerias/fotos/' . $fotos->id_galeria);
	}

}