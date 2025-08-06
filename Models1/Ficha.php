<?php namespace Models1;
include_once 'conexion.php';
	
	//use Models1\conexion as Con;
	class Ficha{
		private $idficha;
		private $idinstitucion;
		private $idprofesional;
		private $fec_consulta;
		private $horaconsulta;
		private $per_dni;
		private $disponelugar;
		private $idsalud;
		private $idvivienda;
		private $agresor;
		private $fec_agresion;
		private $hora_agresion;
		private $p_menores;
		private $idmomento;
                private $fecha1;
		private $fecha2;
                private $idusuario;
                //reincidencia
                private $r_idprofesional;
		private $r_disponelugar;
		private $r_idsalud;
		private $r_idvivienda;
		private $r_fec_agresion;
		private $r_hora_agresion;
		private $r_p_menores;
		private $r_idmomento;
		private $r_idusuario;
		//private $conexion;
                private $descargaarchivos;
                //Busqueda por nombre y apellido
                private $nombre;
                private $apellido;
                //Sumario
                private $ca_tipmedidas;

		public function __construct(){
			//$this->conexion = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function agregarFicha(){
                    $this->horaconsulta = !empty($this->horaconsulta) ? $this->horaconsulta : "00:00";
                    $this->disponelugar = !empty($this->disponelugar) ? $this->disponelugar : "NULL";
                    $this->idsalud = !empty($this->idsalud) ? $this->idsalud : "NULL";
                    $this->idvivienda = !empty($this->idvivienda) ? $this->idvivienda : "NULL";
                    $this->agresor = !empty($this->agresor) ? $this->agresor : " ";
                    $this->hora_agresion = !empty($this->hora_agresion) ? $this->hora_agresion : "00:00";
                    
                    
                        $con = new Conexion();
			$sql = "INSERT INTO ficha(idficha,idprofesional, fec_consulta, horaconsulta, per_dni, disponelugar, idsalud, idvivienda, agresor, fec_agresion, hora_agresion, p_menores, idmomento, idusuario) VALUES ({$this->idficha},{$this->idprofesional}, '{$this->fec_consulta}', '{$this->horaconsulta}', {$this->per_dni}, {$this->disponelugar}, {$this->idsalud}, {$this->idvivienda}, '{$this->agresor}', '{$this->fec_agresion}', '{$this->hora_agresion}', {$this->p_menores}, {$this->idmomento}, {$this->idusuario})";
                        $con->consultaSimple($sql);
                        //echo $sql;
		}

	        public function eliminarFicha(){
                        $con = new Conexion();
			$sql = "DELETE FROM ficha WHERE idficha = {$this->idficha}";
			$con->consultaSimple($sql);
		}

		public function updateFicha(){
                    $this->horaconsulta = !empty($this->horaconsulta) ? $this->horaconsulta : "NULL";
                    $this->disponelugar = !empty($this->disponelugar) ? $this->disponelugar : "NULL";
                    $this->idsalud = !empty($this->idsalud) ? $this->idsalud : "NULL";
                    $this->idvivienda = !empty($this->idvivienda) ? $this->idvivienda : "NULL";
                    $this->agresor = !empty($this->agresor) ? $this->agresor : " ";
                    $this->hora_agresion = !empty($this->hora_agresion) ? $this->hora_agresion : "NULL";
                    
                        $con = new Conexion();
			$sql = "UPDATE ficha SET idprofesional = {$this->idprofesional}, fec_consulta = '{$this->fec_consulta}', horaconsulta = '{$this->horaconsulta}', disponelugar = {$this->disponelugar}, idsalud = {$this->idsalud}, idvivienda = {$this->idvivienda}, agresor = '{$this->agresor}', fec_agresion = '{$this->fec_agresion}', hora_agresion = '{$this->hora_agresion}', p_menores = {$this->p_menores}, idmomento = {$this->idmomento} , idusuario = ". $_SESSION['idusuario'] ." WHERE idficha = {$this->idficha}";
                        $con->consultaSimple($sql);
		}

		public function verFichaPorInsti(){
			$sql = "SELECT * FROM ficha WHERE per_dni = {$this->per_dni} AND idinstitucion = {$this->idinstitucion}";
			$datos = $this->con->consultaRetorno($sql);
			$row = pg_fetch_assoc($datos);
			return $row;
		}

		public function verFicha(){
			$con = new Conexion();
			$sql = "SELECT ficha.per_dni, CONCAT(CONCAT(persona.per_apellido,', '),persona.per_nombre) as consultante, ficha.agresor, ficha.fec_consulta, ficha.horaconsulta, ficha.fec_agresion, ficha.hora_agresion, ficha.idficha FROM ficha, persona, institucion, usuarios WHERE ficha.per_dni = persona.per_dni AND ficha.per_dni = {$this->per_dni} AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." ORDER BY ficha.fec_consulta DESC";
			//echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />" . $sql;
			$datos = $con->consultaRetorno($sql);
			//$row = pg_affected_rows($datos);
			return $datos;	
		}
                
        public function verFichaNueva(){
			$con = new Conexion();
			$sql = "SELECT f.* FROM ficha AS f INNER JOIN persona AS p ON p.per_dni=f.per_dni WHERE f.idficha= {$this->idficha}";
			$datos = $con->consultaRetorno($sql);
			$row = pg_fetch_assoc($datos);
			return $row;	
		}
                
                public function verUltimoIdFicha(){
			$con = new Conexion();
                        $sql = " SELECT MAX(idficha) FROM ficha";
                        $datos = $con->consultaRetorno($sql);
			$row = pg_fetch_assoc($datos);
			return $row;	
		}

               
                public function veranios(){
			$con = new Conexion();
			$sql = "SELECT date_part('year'::text, ficha.fec_consulta) AS anio FROM ficha WHERE date_part('year'::text, ficha.fec_consulta) <= {$this->anio} GROUP BY date_part('year'::text, ficha.fec_consulta) ORDER BY anio DESC";
			//echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />" . $sql;
			$datos = $con->consultaRetorno($sql);
			//$row = pg_affected_rows($datos);
			return $datos;	
		}

		public function vermeses(){
			$con = new Conexion();
			$sql1 = "CREATE OR REPLACE VIEW cantidades_por_dni AS  SELECT date_part('year'::text, ficha.fec_consulta) AS anio,
				    date_part('month'::text, ficha.fec_consulta) AS mes,
				    persona.per_dni,
				    count(ficha.per_dni) AS dni,
				    institucion.ins_descripcion
				   FROM ficha,
				    persona,
				    institucion,
				    usuarios
				  WHERE (((((((ficha.per_dni)::text = (persona.per_dni)::text) AND (ficha.idusuario = usuarios.idusuario)) AND (persona.victima = 1)) AND (usuarios.idinstitucion = institucion.idinstitucion)) AND (institucion.idinstitucion = ". $_SESSION['idinstitucion'] .")) AND (ficha.fec_consulta > '2000-01-01'::date))
				  GROUP BY date_part('year'::text, ficha.fec_consulta), date_part('month'::text, ficha.fec_consulta), persona.per_dni, institucion.ins_descripcion
				  ORDER BY date_part('year'::text, ficha.fec_consulta), date_part('month'::text, ficha.fec_consulta);";
			$con->consultaSimple($sql1);
			$sql = "SELECT anio, mes, COUNT(dni) as personas, SUM(dni) as fichas, ins_descripcion FROM cantidades_por_dni WHERE anio = ". $_GET['anio'] ." GROUP BY anio, mes, ins_descripcion ORDER BY mes ASC";
			//echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />" . $sql;
			$datos = $con->consultaRetorno($sql);
			//$row = pg_affected_rows($datos);
			return $datos;	
		}

		public function verTotales(){
			$con = new Conexion();
			$sql1 = "CREATE OR REPLACE VIEW cantidades_por_dni AS  SELECT date_part('year'::text, ficha.fec_consulta) AS anio,
				    date_part('month'::text, ficha.fec_consulta) AS mes,
				    persona.per_dni,
				    count(ficha.per_dni) AS dni,
				    institucion.ins_descripcion
				   FROM ficha,
				    persona,
				    institucion,
				    usuarios
				  WHERE (((((((ficha.per_dni)::text = (persona.per_dni)::text) AND (ficha.idusuario = usuarios.idusuario)) AND (persona.victima = 1)) AND (usuarios.idinstitucion = institucion.idinstitucion)) AND (institucion.idinstitucion = ". $_SESSION['idinstitucion'] .")) AND (ficha.fec_consulta > '2000-01-01'::date))
				  GROUP BY date_part('year'::text, ficha.fec_consulta), date_part('month'::text, ficha.fec_consulta), persona.per_dni, institucion.ins_descripcion
				  ORDER BY date_part('year'::text, ficha.fec_consulta), date_part('month'::text, ficha.fec_consulta);";
			$con->consultaSimple($sql1);
			$sql = "SELECT anio, SUM(dni) as fichas, ins_descripcion FROM cantidades_por_dni GROUP BY anio, ins_descripcion ORDER BY anio ASC";
			//echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />" . $sql;
			$datos = $con->consultaRetorno($sql);
			//$row = pg_affected_rows($datos);
			return $datos;	
		}


		public function verTotalesMes(){
			$con = new Conexion();
			$sql1 = "CREATE OR REPLACE VIEW cantidades_por_dni AS  SELECT date_part('year'::text, ficha.fec_consulta) AS anio,
				    date_part('month'::text, ficha.fec_consulta) AS mes,
				    ficha.per_dni,
				    count(ficha.per_dni) AS dni,
				    institucion.ins_descripcion
				   FROM ficha,
				    persona,
				    institucion,
				    usuarios
				  WHERE ((((((ficha.per_dni)::text = (persona.per_dni)::text) AND (ficha.idusuario = usuarios.idusuario)) AND (usuarios.idinstitucion = institucion.idinstitucion)) AND (institucion.idinstitucion = ". $_SESSION['idinstitucion'] .")) AND (ficha.fec_consulta > '2000-01-01'::date))
				  GROUP BY date_part('year'::text, ficha.fec_consulta), date_part('month'::text, ficha.fec_consulta), ficha.per_dni, institucion.ins_descripcion
				  ORDER BY date_part('year'::text, ficha.fec_consulta), date_part('month'::text, ficha.fec_consulta);";
			$con->consultaSimple($sql1);
			$sql = "SELECT anio, mes, SUM(dni) as fichas, ins_descripcion FROM cantidades_por_dni GROUP BY anio, mes, ins_descripcion ORDER BY anio DESC";
			//echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />" . $sql;
			$datos = $con->consultaRetorno($sql);
			//$row = pg_affected_rows($datos);
			return $datos;	
		}
                
                public function verFichas(){
			$con = new Conexion();
			$sql = "CREATE OR REPLACE VIEW fichas_por_dni AS SELECT ficha.per_dni, CONCAT(CONCAT(persona.per_apellido,', '),persona.per_nombre) as consultante, ficha.fec_consulta, ficha.horaconsulta, ficha.fec_agresion, ficha.hora_agresion, institucion.ins_descripcion FROM ficha, persona, profesional, institucion WHERE ficha.per_dni = persona.per_dni AND ficha.per_dni = {$this->per_dni} AND ficha.idprofesional = profesional.idprofesional AND profesional.idinstitucion = institucion.idinstitucion ORDER BY ficha.fec_consulta DESC";
			$con->consultaSimple($sql);
			$sql1 = "SELECT * FROM fichas_por_dni ORDER BY fec_consulta DESC";
			//echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />" . $sql;
			//echo $sql1;
			$datos = $con->consultaRetorno($sql1);
			//$row = pg_affected_rows($datos);
			return $datos;	
                }
                
                public function agregarFichaTemporal(){
                        $con = new Conexion();
                        //$this->ca_expediente = !empty($this->ca_expediente) ? $this->ca_expediente : "";
                        $this->fec_consulta = !empty($this->fec_consulta) ? $this->fec_consulta : NULL;
                        //$this->ca_oficio = !empty($this->ca_oficio) ? $this->ca_oficio : "NULL";
                        //$this->idfiscalia = !empty($this->idfiscalia) ? $this->idfiscalia : "NULL";
                        //$this->ca_causa = !empty($this->ca_causa) ? $this->ca_causa : "";
                        $this->per_dni = !empty($this->per_dni) ? $this->per_dni : "NULL";
                        //$this->agresor = !empty($this->agresor) ? $this->agresor : "";
                        $this->fec_agresion = !empty($this->fec_agresion) ? $this->fec_agresion : "NULL";
                        //$this->ca_deporigen = !empty($this->ca_deporigen) ? $this->ca_deporigen : "";
                        //$this->ca_tipmedida = !empty($this->ca_tipmedida) ? $this->ca_tipmedida : "";
                        //$this->ca_domicilio = !empty($this->ca_domicilio) ? $this->ca_domicilio : "";
                        //$this->idcomisaria = !empty($this->idcomisaria) ? $this->idcomisaria : "NULL";
                        //$this->ca_plazo = !empty($this->ca_plazo) ? $this->ca_plazo : "NULL";
                        //$this->ca_observaciones = !empty($this->ca_observaciones) ? $this->ca_observaciones : "";
                        $sql = "INSERT INTO tmp_consulta_dni(fec_consulta, consultante, per_dni, fec_agresion, ins_descripcion, fec_ingreso, ca_tipmedidas, ca_plazo) VALUES ('{$this->fec_consulta}', '{$this->consultante}', {$this->per_dni}, '{$this->fec_agresion}', '{$this->ins_descripcion}', NULL, NULL, NULL)";
                        $con->consultaSimple($sql);
                }
                
                public function agregarSumarioTemporal(){
                        $con = new Conexion();
                        $this->fec_consulta = !empty($this->fec_consulta) ? $this->fec_consulta : NULL;
                        $this->per_dni = !empty($this->per_dni) ? $this->per_dni : "NULL";
                        $this->fec_agresion = !empty($this->fec_agresion) ? $this->fec_agresion : "NULL";
                        $this->ca_tipmedidas = !empty($this->ca_tipmedidas) ? $this->ca_tipmedidas : "NULL";
                        $sql = "INSERT INTO tmp_consulta_dni(fec_consulta, consultante, per_dni, fec_agresion, ins_descripcion, ca_tipmedidas) VALUES ('{$this->fec_consulta}', '{$this->consultante}', {$this->per_dni}, '{$this->fec_agresion}', '{$this->ins_descripcion}', '{$this->ca_tipmedidas}')";
                        $con->consultaSimple($sql);
                }


		public function verTodasLasFichas(){
			$con = new Conexion();
			$sql = "SELECT per.per_dni, per.per_apellido,per.per_nombre,per.idsexo, sxp.sex_descripcion AS peridsexo, 
                        per.idgenero, gen.gen_descripcion AS peridgenero, per.idestadocivil, estciv.est_descripcion AS estcividestadocivil,
                        per.per_nacido,
                        per.per_discapacitada, COALESCE (sndisc.disp_descripcion,'-') AS fperdiscapacitada,
                        per.per_celular, per.per_domicilio, per.iddepartamento, 
                        COALESCE (depto.dep_descripcion,'-') AS periddepartamento,
                        per.idlocalidad, 
                        COALESCE (loc.loc_nombre,'-') AS locidlocalidad,
                        f.idficha, f.idprofesional, 
                        (case when (prof.pro_apellido='' and prof.pro_nombre='') then '-' else
                        (concat_ws(', ', prof.pro_apellido, prof.pro_nombre)) end)AS pro_apellidonombre,
                        f.fec_consulta, f.horaconsulta, 
                        f.fec_agresion, f.hora_agresion,
                        f.idmomento, COALESCE (mom.mo_descripcion,'-') AS fidmomento,
                        f.p_menores, COALESCE (pm.disp_descripcion,'-') AS fp_menores,
                        f.agresor,
                        f.disponelugar, COALESCE (sndl.disp_descripcion,'-') AS fdisponelugar,
                        f.idsalud, COALESCE (sal.sal_descripcion,'-') AS fidsalud,
                        f.idvivienda, COALESCE (viv.viv_descripcion,'-') AS fidvivienda, 
                        f.idusuario, usu.username AS fidusuario,
                        f1.idactividad, COALESCE (act.act_descripcion,'-') AS f1idactividad,
                        f1.idremunerada, COALESCE (rem.rem_descripcion,'-') AS f1idremunerada,
                        f1.ingreso, COALESCE (sning.disp_descripcion,'-') AS f1ingreso,
                        f1.auh, COALESCE (snauh.disp_descripcion,'-') AS f1auh,
                        f1.leeono, COALESCE (snlee.disp_descripcion,'-') AS f1leeono,
                        f1.edu_consultante, COALESCE (educ.edu_descripcion,'-') AS f1edu_consultante,
                        f1.edu_agresor, COALESCE (edua.edu_descripcion,'-') AS f1edu_agresor,
                        f1.psocial, COALESCE (snps.disp_descripcion,'-') AS f1psocial,
                        f1.migrante, COALESCE (snmig.disp_descripcion,'-') AS f1migrante,
                        f1.idprocedencia, COALESCE (proce.pr_descripcion,'-') AS f1idprocedencia,
                        f1.permanencia,
                        f1.rs_concurrir, COALESCE (snrscon.disp_descripcion,'-') AS f1rs_concurrir,
                        f1.rs_institucion, COALESCE (snrsing.disp_descripcion,'-') AS f1rs_institucion,
                        f1.rs_vinculos, COALESCE (snrsvin.disp_descripcion,'-') AS f1rs_vinculos,
                        f1.cv_problemas, COALESCE (sncvpro.disp_descripcion,'-') AS f1cv_problemas,
                        f1.cv_perempleo, COALESCE (sncvperem.disp_descripcion,'-') AS f1cv_perempleo,
                        f1.cv_limitacion, COALESCE (sncvlim.disp_descripcion,'-') AS f1cv_limitacion,
                        f1.cv_perestudio, COALESCE (sncvperes.disp_descripcion,'-') AS f1cv_perestudio,
                        f2.idficha, f2.idficha2, COALESCE (f2.f2_apellido,'-') AS f2_apellido, COALESCE (f2.f2_nombre,'-') AS f2_nombre,
                        f2.idsexo, COALESCE (sex.sex_descripcion,'-') AS f2idsexo,
                        f2.f2_edad, f2.f2_mes,
                        f2.idpariente, COALESCE (pari.par_descripcion,'-') AS f2par_descripcion,
                        f2.discapacitado, COALESCE (sndisca.disp_descripcion,'-') AS f2discapacitado,
                        f2.victimavio, COALESCE (snviol.disp_descripcion,'-') AS f2victimavio,
                        f3.cohab, COALESCE (convi.conv_descripcion,'-') AS f3cohab,
                        f3.idvinculo, COALESCE (vinc.vin_descripcion,'-') AS f3idvinculo,
                        f3.anviagresor, f3.anmaltrato,
                        f3.embarazada, COALESCE (sinoemba.disp_descripcion,'-') AS f3embarazada,
                        f3.idriesgo, COALESCE (ries.rie_descripcion,'-') AS f3idriesgo,
                        f31.v_fisica, COALESCE (snvf.disp_descripcion,'-') AS f31v_fisica,
                        f31.v_psicologica, COALESCE (snvpsc.disp_descripcion,'-') AS f31v_psicologica,
                        f31.v_sexual, COALESCE (snvsex.disp_descripcion,'-') AS f31v_sexual,
                        f31.v_economica, COALESCE (snveco.disp_descripcion,'-') AS f31v_economica,
                        f31.v_parsocial, COALESCE (snpar.disp_descripcion,'-') AS f31v_parsocial,
                        f31.v_simbolica, COALESCE (snvsimbo.disp_descripcion,'-') AS f31v_simbolica,
                        f31.co_obstaculo, COALESCE (snobs.disp_descripcion,'-') AS f31co_obstaculo,
                        f31.co_econo, COALESCE (snecono.disp_descripcion,'-') AS f31co_econo,
                        f32.anco_fisica, COALESCE (snanfis.disp_descripcion,'-') AS f32anco_fisica,
                        f32.anco_psico, COALESCE (snanpsi.disp_descripcion,'-') AS f32anco_psico,
                        f32.anco_absex, COALESCE (snanabs.disp_descripcion,'-') AS f32anco_absex,
                        f32.anco_tesvio, COALESCE (snantes.disp_descripcion,'-') AS f32anco_tesvio,
                        f32.anco_aban, COALESCE (snanaba.disp_descripcion,'-') AS f32anco_aban, 
                        COALESCE (f32.anco_otro,'-') AS anco_otro,
                        f33.anag_fisica, COALESCE (snanagfis.disp_descripcion,'-') AS f33anag_fisica,
                        f33.anag_psico, COALESCE (snanagpsi.disp_descripcion,'-') AS f33anag_psico,
                        f33.anag_absex, COALESCE (snanagabsex.disp_descripcion,'-') AS f33anag_absex,
                        f33.anag_tesvio, COALESCE (snanagte.disp_descripcion,'-') AS f33anag_tesvio,
                        f33.anag_aban, COALESCE (snanagab.disp_descripcion,'-') AS f33anag_aban,       
                        COALESCE (f33.anag_otro,'-') AS anag_otro, 
                        f34.he_embar, COALESCE (snheemb.disp_descripcion,'-') AS f34he_embar,
                        f34.he_celos, COALESCE (snhecel.disp_descripcion,'-') AS f34he_celos,
                        f34.he_plabor, COALESCE (snhepla.disp_descripcion,'-') AS f34he_plabor,
                        f34.he_alcohol ,COALESCE (snhealc.disp_descripcion,'-') AS f34he_alcohol,
                        f34.he_autoco, COALESCE (snheaut.disp_descripcion,'-') AS f34he_autoco,
                        f34.he_impco, COALESCE (snheimp.disp_descripcion,'-') AS f34he_impco,
                        f34.he_separ, COALESCE (snhesep.disp_descripcion,'-') AS f34he_separ,          
                        COALESCE (f34.he_otro,'-') AS he_otro, 
                        f35.ind_lesfis, COALESCE (snindles.disp_descripcion,'-') AS f35ind_lesfis,
                        f35.ind_intmed, COALESCE (snindint.disp_descripcion,'-') AS f35ind_intmed,
                        f35.ind_amuerte, COALESCE (snindamu.disp_descripcion,'-') AS f35ind_amuerte,
                        f35.ind_armas, COALESCE (snindarm.disp_descripcion,'-') AS f35ind_armas,
                        f35.ind_aborto, COALESCE (snindindabo.disp_descripcion,'-') AS f35ind_aborto,
                        f35.ind_idsuic, COALESCE (snindids.disp_descripcion,'-') AS f35ind_idsuic,
                        f35.ind_insuic, COALESCE (snindins.disp_descripcion,'-') AS f35ind_insuic,
                        f35.ind_sexfor, COALESCE (snindsex.disp_descripcion,'-') AS f35ind_sexfor,
                        f35.ind_acoso, COALESCE (snindaco.disp_descripcion,'-') AS f35ind_acoso,
                        f35.ind_antpen, COALESCE (snindant.disp_descripcion,'-') AS f35ind_antpen,      
                        f35.ind_sust, COALESCE (snindsus.disp_descripcion,'-') AS f35ind_sust, 
                        f36.t_suenio, COALESCE (sntsue.disp_descripcion,'-') AS f36t_suenio,
                        f36.t_alimen, COALESCE (sntli.disp_descripcion,'-') AS f36t_alimen,
                        f36.t_digest, COALESCE (sntdig.disp_descripcion,'-') AS f36t_digest,
                        f36.t_antidep, COALESCE (sntant.disp_descripcion,'-') As f36t_antidep,
                        f36.t_aldrog, COALESCE (sntald.disp_descripcion,'-') AS f36t_aldrog,         
                        f36.t_its, COALESCE (sntits.disp_descripcion,'-') AS f36t_its, 
                        COALESCE (f36.t_otro,'-') AS t_otro,
                        f37.des_hijos, COALESCE (sndeshij.disp_descripcion,'-') AS f37des_hijos,
                        f37.des_golpe, COALESCE (sndesgol.disp_descripcion,'-') AS f37des_golpe,
                        f37.des_conoc, COALESCE (sndescon.disp_descripcion,'-') AS f37des_conoc,
                        f37.des_infide, COALESCE (sndesinf.disp_descripcion,'-') AS f37des_infide,
                        f37.des_solic, COALESCE (sndessol.disp_descripcion,'-') AS f37des_solic,
                        f37.des_limite, COALESCE (sndeslim.disp_descripcion,'-') AS f37des_limite,
                        f37.des_legal, COALESCE (sndesleg.disp_descripcion,'-') AS f37des_legal,
                        f37.des_deriv, COALESCE (sndesder.disp_descripcion,'-') AS f37des_deriv,        
                        f37.des_miedo, COALESCE (sndesmie.disp_descripcion,'-') AS f37des_miedo, 
                        COALESCE (f37.des_otro,'-') AS des_otro,
                        f4.recientepenal, COALESCE (snrpen.disp_descripcion,'-') AS f4recientepenal,
                        f4.previapenal, COALESCE (snppen.disp_descripcion,'-') AS f4previapenal,
                        f4.recientecivil, COALESCE (snrciv.disp_descripcion,'-') AS f4recientecivil,
                        f4.previacivil, COALESCE (snpciv.disp_descripcion,'-') AS f4previacivil,
                        f4.recientepoli, COALESCE (snrpol.disp_descripcion,'-') AS f4recientepoli,
                        f4.previapoli, COALESCE (snppol.disp_descripcion,'-') AS f4previapoli,
                        f4.denuncia, COALESCE (sndenun.disp_descripcion,'-') AS f4denuncia,
                        f4.p_medidas, COALESCE (snpmed.disp_descripcion,'-') AS f4p_medidas,
                        f4.idaccesibilidad, COALESCE (acs.ac_descripcion,'-') AS f4idaccesibilidad,      
                        f4.idcomisaria, 
                        COALESCE (com.com_nombre,'-') AS com_nombre,
                        f4.de_noinfo, COALESCE (sndenoi.disp_descripcion,'-') AS f4de_noinfo,
                        f4.de_ofemp, COALESCE (sndeofi.disp_descripcion,'-') AS f4de_ofemp,
                        f4.de_consul, COALESCE (sndecon.disp_descripcion,'-') AS f4de_consul,
                        f4.de_defen, COALESCE (sndedef.disp_descripcion,'-') AS f4de_defen,
                        f4.de_psocial, COALESCE (sndepso.disp_descripcion,'-') AS f4de_psocial,
                        f4.de_amujer, COALESCE (sndeamu.disp_descripcion,'-') AS f4de_amujer,       
                        f4.de_comujer, COALESCE (sndecomu.disp_descripcion,'-') AS f4de_comujer,
                        COALESCE (f4.de_otra,'-') AS de_otra,
                        f4.di_noinfo, COALESCE (sndino.disp_descripcion,'-') AS f4di_noinfo,
                        f4.di_apsico, COALESCE (sndiap.disp_descripcion,'-') AS f4di_apsico,
                        f4.di_pjuridico, COALESCE (sndiju.disp_descripcion,'-') AS f4di_pjuridico,
                        f4.di_refugio, COALESCE (sndire.disp_descripcion,'-') AS f4di_refugio,
                        f4.di_grupos, COALESCE (sndigr.disp_descripcion,'-') AS f4di_grupos,        
                        f4.di_alegal, COALESCE (sndial.disp_descripcion,'-') AS f4di_alegal,
                        f4.di_asocial, COALESCE (sndias.disp_descripcion,'-') AS f4di_asocial,
                        COALESCE (f4.di_otros,'-') AS di_otros,
                        f41.me_acerca, COALESCE (snmeac.med_descripcion,'-') AS f41me_acerca,
                        f41.me_perten, COALESCE (snmeper.med_descripcion,'-') AS f41me_perten,
                        f41.me_alimen, COALESCE (snmeali.med_descripcion,'-') AS f41me_alimen,
                        f41.me_exhog, COALESCE (snmeexh.med_descripcion,'-') AS f41me_exhog,
                        f41.me_resper, COALESCE (snmeres.med_descripcion,'-') AS f41me_resper,
                        f41.me_visitas, COALESCE (snmevis.med_descripcion,'-') AS f41me_visitas,
                        f41.me_prohib, COALESCE (snmepro.med_descripcion,'-') AS f41me_prohib,
                        f41.me_psico, COALESCE (snmepsi.med_descripcion,'-') AS f41me_psico,
												f41.me_dual, COALESCE (snmedual.med_descripcion,'-') AS f41me_dual,
                        COALESCE (f41.me_otra,'-') AS me_otra
                        FROM ficha AS f
                        INNER JOIN usuarios AS us
                        ON us.idusuario=f.idusuario 
                        LEFT OUTER JOIN persona AS per
                        ON f.per_dni=per.per_dni
                        LEFT OUTER JOIN sexo AS sxp
                        ON per.idsexo=sxp.idsexo
                        LEFT OUTER JOIN genero AS gen
                        ON per.idgenero=gen.idgenero
                        LEFT OUTER JOIN estadocivil AS estciv
                        ON per.idestadocivil=estciv.idestadocivil
                        LEFT OUTER JOIN departamento AS depto
                        ON per.iddepartamento=depto.iddepartamento
                        LEFT OUTER JOIN localidad AS loc
                        ON per.idlocalidad=loc.idlocalidad
                        LEFT OUTER JOIN ficha1 AS f1
                        ON f.idficha=f1.idficha
                        LEFT OUTER JOIN sino AS sndl
                        ON f.disponelugar=sndl.iddisponibilidad
                        LEFT OUTER JOIN sino AS sndisc
                        ON per.per_discapacitada=sndisc.iddisponibilidad
                        LEFT OUTER JOIN sino AS pm
                        ON f.p_menores=pm.iddisponibilidad
                        LEFT OUTER JOIN profesional AS prof
                        ON f.idprofesional=prof.idprofesional
                        LEFT OUTER JOIN momento AS mom
                        ON f.idmomento=mom.idmomento
                        LEFT OUTER JOIN usuarios AS usu
                        ON f.idusuario=usu.idusuario
                        LEFT OUTER JOIN salud AS sal
                        ON f.idsalud=sal.idsalud
                        LEFT OUTER JOIN vivienda AS viv
                        ON f.idvivienda=viv.idvivienda
                        LEFT OUTER JOIN remunerada AS rem
                        ON f1.idremunerada=rem.idremunerada
                        INNER JOIN actividad AS act
                        ON f1.idactividad=act.idactividad
                        LEFT OUTER JOIN sino AS sning
                        ON f1.ingreso=sning.iddisponibilidad
                        LEFT OUTER JOIN sino AS snauh
                        ON f1.auh=snauh.iddisponibilidad
                        LEFT OUTER JOIN sino AS snlee
                        ON f1.leeono=snlee.iddisponibilidad
                        LEFT OUTER JOIN educacion AS educ
                        ON f1.edu_consultante=educ.ideducacion
                        LEFT OUTER JOIN educacion AS edua
                        ON f1.edu_agresor=edua.ideducacion
                        LEFT OUTER JOIN sino AS snps
                        ON f1.psocial=snps.iddisponibilidad
                        LEFT OUTER JOIN sino AS snmig
                        ON f1.migrante=snmig.iddisponibilidad
                        LEFT OUTER JOIN procedencia AS proce
                        ON f1.idprocedencia=proce.idprocedencia
                        LEFT OUTER JOIN sino AS snrscon
                        ON f1.rs_concurrir=snrscon.iddisponibilidad
                        LEFT OUTER JOIN sino AS snrsing
                        ON f1.rs_institucion=snrsing.iddisponibilidad
                        LEFT OUTER JOIN sino AS snrsvin
                        ON f1.rs_institucion=snrsvin.iddisponibilidad
                        LEFT OUTER JOIN sino AS sncvpro
                        ON f1.cv_problemas=sncvpro.iddisponibilidad
                        LEFT OUTER JOIN sino AS sncvperem
                        ON f1.cv_perempleo=sncvperem.iddisponibilidad
                        LEFT OUTER JOIN sino AS sncvlim
                        ON f1.cv_limitacion=sncvlim.iddisponibilidad
                        LEFT OUTER JOIN sino AS sncvperes
                        ON f1.cv_perestudio=sncvperes.iddisponibilidad
                        LEFT OUTER JOIN ficha2 AS f2
                        ON f2.idficha=f.idficha
                        LEFT OUTER JOIN sexo AS sex
                        ON f2.idsexo=sex.idsexo
                        LEFT OUTER JOIN pariente AS pari
                        ON f2.idpariente=pari.idpariente
                        LEFT OUTER JOIN sino AS sndisca
                        ON f2.discapacitado=sndisca.iddisponibilidad
                        LEFT OUTER JOIN sino AS snviol
                        ON f2.victimavio=snviol.iddisponibilidad
                        LEFT OUTER JOIN ficha3 AS f3
                        ON f.idficha=f3.idficha
                        LEFT OUTER JOIN convivencia AS convi
                        ON f3.cohab =convi.idconvivencia
                        LEFT OUTER JOIN vinculo AS vinc
                        ON f3.idvinculo=vinc.idvinculo
                        LEFT OUTER JOIN sino AS sinoemba
                        ON f3.embarazada=sinoemba.iddisponibilidad
                        LEFT OUTER JOIN riesgo AS ries
                        ON f3.idriesgo=ries.idriesgo
                        LEFT OUTER JOIN ficha31 AS f31
                        ON f.idficha=f31.idficha
                        LEFT OUTER JOIN sino AS snvf
                        ON f31.v_fisica=snvf.iddisponibilidad
                        LEFT OUTER JOIN sino AS snvpsc
                        ON f31.v_psicologica=snvpsc.iddisponibilidad
                        LEFT OUTER JOIN sino AS snvsex
                        ON f31.v_sexual=snvsex.iddisponibilidad
                        LEFT OUTER JOIN sino AS snveco
                        ON f31.v_economica=snveco.iddisponibilidad
                        LEFT OUTER JOIN sino AS snpar
                        ON f31.v_parsocial=snpar.iddisponibilidad
                        LEFT OUTER JOIN sino AS snvsimbo
                        ON f31.v_simbolica=snvsimbo.iddisponibilidad
                        LEFT OUTER JOIN sino AS snobs
                        ON f31.co_obstaculo=snobs.iddisponibilidad
                        LEFT OUTER JOIN sino AS snecono
                        ON f31.co_econo=snecono.iddisponibilidad
                        LEFT OUTER JOIN ficha32 AS f32
                        ON f.idficha=f32.idficha
                        LEFT OUTER JOIN sino AS snanfis
                        ON f32.anco_fisica =snanfis.iddisponibilidad
                        LEFT OUTER JOIN sino AS snanpsi
                        ON f32.anco_psico=snanpsi.iddisponibilidad
                        LEFT OUTER JOIN sino AS snanabs
                        ON f32.anco_absex=snanabs.iddisponibilidad
                        LEFT OUTER JOIN sino AS snantes
                        ON f32.anco_tesvio=snantes.iddisponibilidad
                        LEFT OUTER JOIN sino AS snanaba
                        ON f32.anco_aban=snanaba.iddisponibilidad
                        LEFT OUTER JOIN ficha33 AS f33
                        ON f.idficha=f33.idficha
                        LEFT OUTER JOIN sino AS snanagfis
                        ON f33.anag_fisica=snanagfis.iddisponibilidad
                        LEFT OUTER JOIN sino AS snanagpsi
                        ON f33.anag_psico=snanagpsi.iddisponibilidad
                        LEFT OUTER JOIN sino AS snanagabsex
                        ON f33.anag_absex=snanagabsex.iddisponibilidad
                        LEFT OUTER JOIN sino AS snanagte
                        ON f33.anag_tesvio=snanagte.iddisponibilidad
                        LEFT OUTER JOIN sino AS snanagab
                        ON f33.anag_aban=snanagab.iddisponibilidad
                        LEFT OUTER JOIN ficha34 AS f34
                        ON f.idficha=f34.idficha
                        LEFT OUTER JOIN sino AS snheemb
                        ON f34.he_embar=snheemb.iddisponibilidad
                        LEFT OUTER JOIN sino AS snhecel
                        ON f34.he_celos=snhecel.iddisponibilidad
                        LEFT OUTER JOIN sino AS snhepla
                        ON f34.he_plabor=snhepla.iddisponibilidad
                        LEFT OUTER JOIN sino AS snhealc
                        ON f34.he_alcohol=snhealc.iddisponibilidad
                        LEFT OUTER JOIN sino AS snheaut
                        ON f34.he_autoco=snheaut.iddisponibilidad
                        LEFT OUTER JOIN sino AS snheimp
                        ON f34.he_impco=snheimp.iddisponibilidad
                        LEFT OUTER JOIN sino AS snhesep
                        ON f34.he_separ=snhesep.iddisponibilidad
                        LEFT OUTER JOIN ficha35 AS f35
                        ON f.idficha=f35.idficha 
                        LEFT OUTER JOIN sino AS snindles 
                        ON f35.ind_lesfis=snindles.iddisponibilidad
                        LEFT OUTER JOIN sino AS snindint
                        ON f35.ind_intmed=snindint.iddisponibilidad
                        LEFT OUTER JOIN sino AS snindamu
                        ON f35.ind_amuerte=snindamu.iddisponibilidad
                        LEFT OUTER JOIN sino AS snindarm
                        ON f35.ind_armas=snindarm.iddisponibilidad
                        LEFT OUTER JOIN sino AS snindindabo
                        ON f35.ind_aborto=snindindabo.iddisponibilidad
                        LEFT OUTER JOIN sino AS snindids
                        ON f35.ind_idsuic=snindids.iddisponibilidad
                        LEFT OUTER JOIN sino AS snindins
                        ON f35.ind_insuic=snindins.iddisponibilidad
                        LEFT OUTER JOIN sino AS snindsex
                        ON f35.ind_sexfor=snindsex.iddisponibilidad
                        LEFT OUTER JOIN sino AS snindaco
                        ON f35.ind_acoso=snindaco.iddisponibilidad
                        LEFT OUTER JOIN sino AS snindant
                        ON f35.ind_antpen=snindant.iddisponibilidad
                        LEFT OUTER JOIN sino AS snindsus
                        ON f35.ind_sust=snindsus.iddisponibilidad
                        LEFT OUTER JOIN ficha36 AS f36 
                        ON f.idficha=f36.idficha 
                        LEFT OUTER JOIN sino AS sntsue
                        ON f36.t_suenio=sntsue.iddisponibilidad
                        LEFT OUTER JOIN sino AS sntli
                        ON f36.t_alimen=sntli.iddisponibilidad
                        LEFT OUTER JOIN sino AS sntdig
                        ON f36.t_digest=sntdig.iddisponibilidad
                        LEFT OUTER JOIN sino AS sntant
                        ON f36.t_antidep=sntant.iddisponibilidad
                        LEFT OUTER JOIN sino AS sntald
                        ON f36.t_aldrog=sntald.iddisponibilidad
                        LEFT OUTER JOIN sino AS sntits
                        ON f36.t_its=sntits.iddisponibilidad 
                        LEFT OUTER JOIN ficha37 AS f37 
                        ON f.idficha=f37.idficha
                        LEFT OUTER JOIN sino AS sndeshij
                        ON f37.des_hijos=sndeshij.iddisponibilidad 
                        LEFT OUTER JOIN sino AS sndesgol
                        ON f37.des_golpe=sndesgol.iddisponibilidad 
                        LEFT OUTER JOIN sino AS sndescon
                        ON f37.des_conoc=sndescon.iddisponibilidad 
                        LEFT OUTER JOIN sino AS sndesinf
                        ON f37.des_infide=sndesinf.iddisponibilidad 
                        LEFT OUTER JOIN sino AS sndessol
                        ON f37.des_solic=sndessol.iddisponibilidad 
                        LEFT OUTER JOIN sino AS sndeslim
                        ON f37.des_limite=sndeslim.iddisponibilidad 
                        LEFT OUTER JOIN sino AS sndesleg
                        ON f37.des_legal=sndesleg.iddisponibilidad 
                        LEFT OUTER JOIN sino AS sndesder
                        ON f37.des_deriv=sndesder.iddisponibilidad 
                        LEFT OUTER JOIN sino AS sndesmie
                        ON f37.des_miedo=sndesmie.iddisponibilidad 
                        LEFT OUTER JOIN ficha4 AS f4 
                        ON f.idficha=f4.idficha
                        LEFT OUTER JOIN sino AS snrpen
                        ON f4.recientepenal=snrpen.iddisponibilidad
                        LEFT OUTER JOIN sino AS snppen
                        ON f4.previapenal=snppen.iddisponibilidad
                        LEFT OUTER JOIN sino AS snrciv
                        ON f4.recientecivil=snrciv.iddisponibilidad
                        LEFT OUTER JOIN sino AS snpciv
                        ON f4.previacivil=snpciv.iddisponibilidad
                        LEFT OUTER JOIN sino AS snrpol
                        ON f4.recientepoli=snrpol.iddisponibilidad
                        LEFT OUTER JOIN sino AS snppol
                        ON f4.previapoli=snppol.iddisponibilidad
                        LEFT OUTER JOIN sino AS sndenun
                        ON f4.denuncia=sndenun.iddisponibilidad
                        LEFT OUTER JOIN sino AS snpmed
                        ON f4.p_medidas=snpmed.iddisponibilidad 
                        LEFT OUTER JOIN ac_servicio AS acs
                        ON f4.idaccesibilidad=acs.idaccesibilidad 
                        LEFT OUTER JOIN comisaria AS com
                        ON f4.idcomisaria=com.idcomisaria
                        LEFT OUTER JOIN sino AS sndenoi
                        ON f4.de_noinfo=sndenoi.iddisponibilidad 
                        LEFT OUTER JOIN sino AS sndeofi
                        ON f4.de_ofemp=sndeofi.iddisponibilidad 
                        LEFT OUTER JOIN sino AS sndecon
                        ON f4.de_consul=sndecon.iddisponibilidad 
                        LEFT OUTER JOIN sino AS sndedef
                        ON f4.de_defen=sndedef.iddisponibilidad 
                        LEFT OUTER JOIN sino AS sndepso
                        ON f4.de_psocial=sndepso.iddisponibilidad 
                        LEFT OUTER JOIN sino AS sndeamu
                        ON f4.de_amujer=sndeamu.iddisponibilidad 
                        LEFT OUTER JOIN sino AS sndecomu 
                        ON f4.de_comujer=sndecomu.iddisponibilidad
                        LEFT OUTER JOIN sino AS sndino
                        ON f4.di_noinfo=sndino.iddisponibilidad
                        LEFT OUTER JOIN sino AS sndiap
                        ON f4.di_apsico=sndiap.iddisponibilidad
                        LEFT OUTER JOIN sino AS sndiju
                        ON f4.di_pjuridico=sndiju.iddisponibilidad
                        LEFT OUTER JOIN sino AS sndire
                        ON f4.di_refugio=sndire.iddisponibilidad
                        LEFT OUTER JOIN sino AS sndigr
                        ON f4.di_grupos=sndigr.iddisponibilidad
                        LEFT OUTER JOIN sino AS sndial
                        ON f4.di_alegal=sndial.iddisponibilidad
                        LEFT OUTER JOIN sino AS sndias
                        ON f4.di_asocial=sndias.iddisponibilidad
                        LEFT OUTER JOIN ficha41 AS f41 
                        ON f.idficha=f41.idficha 
                        LEFT OUTER JOIN medida AS snmeac
                        ON f41.me_acerca=snmeac.idmedida
                        LEFT OUTER JOIN medida AS snmeper
                        ON f41.me_perten=snmeper.idmedida
                        LEFT OUTER JOIN medida AS snmeali
                        ON f41.me_alimen=snmeali.idmedida
                        LEFT OUTER JOIN medida AS snmeexh
                        ON f41.me_exhog=snmeexh.idmedida
                        LEFT OUTER JOIN medida AS snmeres
                        ON f41.me_resper=snmeres.idmedida
                        LEFT OUTER JOIN medida AS snmevis
                        ON f41.me_visitas=snmevis.idmedida
                        LEFT OUTER JOIN medida AS snmepro
                        ON f41.me_prohib=snmepro.idmedida
                        LEFT OUTER JOIN medida AS snmepsi
                        ON f41.me_psico=snmepsi.idmedida
						LEFT OUTER JOIN medida AS snmedual
                        ON f41.me_dual=snmedual.idmedida
                        WHERE f.idficha={$this->idficha} AND us.idinstitucion = {$this->idinstitucion}";
			//echo "<br /><br /><br />" . $sql;
			$datos2 = $con->consultaRetorno($sql);
			//$row = pg_affected_rows($datos);
			return $datos2;	
		}




		public function verConsultasPorDni(){
			$con = new Conexion();
			$sql = "SELECT * FROM tmp_consulta_dni ORDER BY fec_consulta DESC";
			//echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />" . $sql;
			$datos = $con->consultaRetorno($sql);
			//$row = pg_affected_rows($datos);
			return $datos;	
		}

		public function consultaFichaConsultante(){
			$con = new Conexion();
			$sql1 = "CREATE or REPLACE VIEW cantidades_por_dni as SELECT date_part('year', ficha.fec_consulta) as anio, date_part('month'::text, ficha.fec_consulta) as mes,  ficha.per_dni, COUNT(ficha.per_dni) as dni FROM ficha, persona WHERE ficha.per_dni = persona.per_dni AND ficha.idinstitucion = '{$this->idinstitucion}' AND ficha.fec_consulta > '2010-01-01' GROUP BY date_part('year', ficha.fec_consulta), date_part('month'::text, ficha.fec_consulta), ficha.per_dni ORDER BY date_part('year', ficha.fec_consulta), date_part('month', ficha.fec_consulta) ASC";
			$datos1 = $con->consultaRetorno($sql1);
			$sql2 = "SELECT anio, mes, COUNT(dni) as personas, SUM(dni) as fichas FROM cantidades_por_dni GROUP BY anio, mes ORDER BY anio, mes";
			$datos2 = $con->consultaRetorno($sql2);
			return $datos2;
		}
                
                public function listarProfesional(){
			$con = new Conexion();
			$sql = "SELECT profesional.idprofesional, profesional.pro_apellido, profesional.pro_nombre, institucion.ins_descripcion,
                        usuarios.idusuario,usuarios.nombre, usuarios.apellido
                        FROM usuarios INNER JOIN institucion ON usuarios.idinstitucion=institucion.idinstitucion
                        INNER JOIN profesional ON institucion.idinstitucion=profesional.idinstitucion
                        WHERE usuarios.idusuario=". $_SESSION['idusuario'] ."
                        ORDER BY profesional.pro_apellido, profesional.pro_nombre ASC  ";
			$datos = $con->consultaRetorno($sql);
			//$row = pg_fetch_assoc($datos);
			return $datos;
		}

		public function preMenores(){
			$con = new Conexion();
			$sql = "SELECT pres_menores.p_menores, COUNT(ficha.per_dni) as consultantes,
					(SELECT COUNT(ficha.per_dni) FROM ficha, usuarios, institucion WHERE ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] .") as total,

					(round(COUNT(ficha.per_dni)/(SELECT COUNT(ficha.per_dni) FROM ficha, usuarios, institucion WHERE ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] .")::numeric,3))*100 AS pnormal
					FROM ficha, pres_menores, institucion, usuarios
					WHERE ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND ficha.p_menores = pres_menores.idpresencia AND ficha.fec_consulta >= '{$this->fecha1}' AND ficha.fec_consulta <= '{$this->fecha2}' GROUP BY pres_menores.p_menores";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function profesional(){
			$con = new Conexion();
			$sql = "SELECT CONCAT(profesional.pro_apellido,', ' ,profesional.pro_nombre) as profesional, COUNT(ficha.per_dni) as fichas FROM ficha, profesional, institucion WHERE ficha.idprofesional = profesional.idprofesional AND profesional.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND ficha.fec_consulta >= '{$this->fecha1}' AND ficha.fec_consulta <= '{$this->fecha2}' GROUP BY profesional.pro_apellido, profesional.pro_nombre";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function updateFichaReincidencia(){
			        $this->horaconsulta = !empty($this->horaconsulta) ? $this->horaconsulta : "NULL";
                    $this->r_disponelugar = !empty($this->r_disponelugar) ? $this->r_disponelugar : "NULL";
                    $this->r_idsalud = !empty($this->r_idsalud) ? $this->r_idsalud : "NULL";
                    $this->r_idvivienda = !empty($this->r_idvivienda) ? $this->r_idvivienda : "NULL";
                    $this->agresor = !empty($this->agresor) ? $this->agresor : " ";
                    $this->r_hora_agresion = !empty($this->r_hora_agresion) ? $this->r_hora_agresion : "NULL";
                    $this->r_idmomento = !empty($this->r_idmomento) ? $this->r_idmomento : NULL;
            $con = new Conexion();
			$sql = "UPDATE ficha SET r_idprofesional = {$this->r_idprofesional}, r_disponelugar = {$this->r_disponelugar}, r_idsalud = {$this->r_idsalud}, r_idvivienda = {$this->r_idvivienda}, r_fec_agresion = '{$this->r_fec_agresion}', r_hora_agresion = '{$this->r_hora_agresion}', r_p_menores = {$this->r_p_menores}, r_idmomento = {$this->r_idmomento} , r_idusuario = ". $_SESSION['idusuario'] ." WHERE idficha = {$this->idficha}";
			//echo $sql;
            $con->consultaSimple($sql);
		}


		public function verTotalesDep(){
			$con = new Conexion();
			$sql1 = "CREATE OR REPLACE VIEW cantidades_por_dni_dep AS  SELECT date_part('year'::text, ficha.fec_consulta) AS anio,
				    date_part('month'::text, ficha.fec_consulta) AS mes,
				    persona.per_dni,
				    count(ficha.per_dni) AS dni,
				    institucion.ins_descripcion
				   FROM ficha,
				    persona,
				    institucion,
				    usuarios
				  WHERE ((((((ficha.per_dni)::text = (persona.per_dni)::text) AND (ficha.idusuario = usuarios.idusuario)) AND (usuarios.idinstitucion = institucion.idinstitucion))) AND (ficha.fec_consulta > '2000-01-01'::date))
				  GROUP BY date_part('year'::text, ficha.fec_consulta), date_part('month'::text, ficha.fec_consulta), persona.per_dni, institucion.ins_descripcion
				  ORDER BY date_part('year'::text, ficha.fec_consulta), date_part('month'::text, ficha.fec_consulta);";
			$con->consultaSimple($sql1);
			$sql = "SELECT anio, SUM(dni) as fichas, ins_descripcion FROM cantidades_por_dni_dep GROUP BY anio, ins_descripcion ORDER BY anio ASC";
			//echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />" . $sql;
			$datos = $con->consultaRetorno($sql);
			//$row = pg_affected_rows($datos);
			return $datos;	
		}


		public function verTotalesMesDep(){
			$con = new Conexion();
			$sql1 = "CREATE OR REPLACE VIEW cantidades_por_dni_dep AS  SELECT date_part('year'::text, ficha.fec_consulta) AS anio,
				    date_part('month'::text, ficha.fec_consulta) AS mes,
				    persona.per_dni,
				    count(ficha.per_dni) AS dni,
				    institucion.ins_descripcion
				   FROM ficha,
				    persona,
				    institucion,
				    usuarios
				  WHERE ((((((ficha.per_dni)::text = (persona.per_dni)::text) AND (ficha.idusuario = usuarios.idusuario)) AND (usuarios.idinstitucion = institucion.idinstitucion))) AND (ficha.fec_consulta > '2000-01-01'::date))
				  GROUP BY date_part('year'::text, ficha.fec_consulta), date_part('month'::text, ficha.fec_consulta), persona.per_dni, institucion.ins_descripcion
				  ORDER BY date_part('year'::text, ficha.fec_consulta), date_part('month'::text, ficha.fec_consulta);";
			$con->consultaSimple($sql1);
                        $sql = "SELECT anio, mes, COUNT(dni) as personas, SUM(dni) as fichas, ins_descripcion FROM cantidades_por_dni_dep WHERE anio = ".$_GET['anio']." GROUP BY anio, mes, ins_descripcion ORDER BY mes, ins_descripcion ASC";
			//echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />" . $sql;
			$datos = $con->consultaRetorno($sql);
			//$row = pg_affected_rows($datos);
			return $datos;	
		}

		public function preMenoresDep(){
			$con = new Conexion();
			$sql = "SELECT pres_menores.p_menores, COUNT(ficha.per_dni) as consultantes,
					(SELECT COUNT(ficha.per_dni) FROM ficha, usuarios, institucion WHERE ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion) as total,

					(round(COUNT(ficha.per_dni)/(SELECT COUNT(ficha.per_dni) FROM ficha, usuarios, institucion WHERE ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion )::numeric,3))*100 AS pnormal
					FROM ficha, pres_menores, institucion, usuarios
					WHERE ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND ficha.p_menores = pres_menores.idpresencia AND ficha.fec_consulta >= '{$this->fecha1}' AND ficha.fec_consulta <= '{$this->fecha2}' GROUP BY pres_menores.p_menores";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function consulta_indec(){
			$con = new Conexion();
			$sql = "SELECT ficha.idficha, persona.per_dni, institucion.ins_descripcion, ficha.fec_consulta, ac_servicio.ac_descripcion, ficha4.di_alegal, ficha4.di_apsico, ficha4.di_asocial, ficha4.di_grupos, ficha4.di_noinfo, ficha4.di_otros, ficha4.di_pjuridico, ficha4.di_refugio, ficha4.de_amujer, ficha4.de_comujer, ficha4.de_consul, ficha4.de_defen, ficha4.de_noinfo, ficha4.de_ofemp, ficha4.de_otra, ficha4.de_psocial, ficha.fec_agresion, ficha.hora_agresion, momento.mo_descripcion, pres_menores.p_menores, sexo.sex_descripcion, genero.gen_descripcion, persona.per_nacido, EXTRACT(YEAR FROM age(persona.per_nacido)) as edad, departamento.dep_descripcion, localidad.loc_nombre, educacion.edu_descripcion as edu_consultante, actividad.act_descripcion, vinculo.vin_descripcion, convivencia.conv_descripcion, ficha31.v_economica, ficha31.v_sexual, ficha31.v_fisica, ficha31.v_parsocial, ficha31.v_simbolica, ficha31.v_psicologica, ficha.agresor, educacion.edu_descripcion as edu_agresor
				FROM persona
				RIGHT JOIN ficha ON persona.per_dni = ficha.per_dni
				INNER JOIN usuarios ON ficha.idusuario = usuarios.idusuario
				INNER JOIN institucion ON usuarios.idinstitucion = institucion.idinstitucion
				INNER JOIN ficha1 ON ficha.idficha = ficha1.idficha
				INNER JOIN ficha3 ON ficha.idficha = ficha3.idficha
				INNER JOIN ficha31 ON ficha.idficha = ficha31.idficha
				INNER JOIN ficha4 ON ficha.idficha = ficha4.idficha
				INNER JOIN ac_servicio ON ficha4.idaccesibilidad = ac_servicio.idaccesibilidad
				LEFT JOIN momento ON ficha.idmomento = momento.idmomento
				INNER JOIN pres_menores ON ficha.p_menores = pres_menores.idpresencia
				INNER JOIN sexo ON persona.idsexo = sexo.idsexo
				LEFT JOIN genero ON persona.idgenero = genero.idgenero
				LEFT JOIN departamento ON persona.iddepartamento = departamento.iddepartamento
				LEFT JOIN localidad ON persona.idlocalidad = localidad.idlocalidad
				INNER JOIN educacion ON ficha1.edu_consultante = educacion.ideducacion
				INNER JOIN (SELECT educacion.ideducacion, educacion.edu_descripcion AS edu_des_agre FROM educacion) as educacion_agresor ON ficha1.edu_agresor = educacion_agresor.ideducacion
				INNER JOIN actividad ON ficha1.idactividad = actividad.idactividad
				INNER JOIN vinculo ON ficha3.idvinculo = vinculo.idvinculo
				INNER JOIN convivencia ON ficha3.cohab = convivencia.idconvivencia
				WHERE ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}'";
			$datos = $con->consultaRetorno($sql);
			return $datos;
                }
                
                public function verFichasPorNombre(){
			$con = new Conexion();
			$sql = "SELECT ficha.per_dni, CONCAT(CONCAT(persona.per_apellido,', '),persona.per_nombre) as consultante, ficha.agresor, ficha.fec_consulta, ficha.horaconsulta, ficha.fec_agresion, ficha.hora_agresion, ficha.idficha FROM ficha, persona, institucion, usuarios WHERE ficha.per_dni = persona.per_dni AND persona.per_nombre ILIKE '%{$this->nombre}%' AND persona.per_apellido ILIKE '%{$this->apellido}%'  AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." ORDER BY ficha.fec_consulta DESC";
			$datos = $con->consultaRetorno($sql);
			return $datos;	
		}

                public function coberturaSaludDep(){
			$con = new Conexion();
			$sql = "SELECT
                                        CASE
                                WHEN salud.sal_descripcion IS NULL THEN
                                        'Sin respuesta'
                                ELSE
                                        salud.sal_descripcion
                                END AS sal_descripcion,
                                COUNT (ficha.per_dni) AS consultantes,
                                (
                                        SELECT
                                                COUNT (ficha.per_dni)
                                        FROM
                                                ficha,
                                                institucion,
                                                usuarios
                                        WHERE
                                                ficha.idusuario = usuarios.idusuario
                                        AND usuarios.idinstitucion = institucion.idinstitucion
                                        AND ficha.fec_consulta <= '{$this->fecha2}' 
                                        AND ficha.fec_consulta >= '{$this->fecha1}'
                                ) AS total,
                                (
                                        round(
                                                COUNT (ficha.per_dni) / (
                                                        SELECT
                                                                COUNT (ficha.per_dni)
                                                        FROM
                                                                ficha,
                                                                institucion,
                                                                usuarios
                                                        WHERE
                                                                ficha.idusuario = usuarios.idusuario
                                                        AND usuarios.idinstitucion = institucion.idinstitucion 
                                                        AND ficha.fec_consulta <= '{$this->fecha2}' 
                                                        AND ficha.fec_consulta >= '{$this->fecha1}'
                                                ) :: NUMERIC,
                                                3
                                        )
                                ) * 100 AS pnormal,
                                institucion.ins_descripcion
                                FROM
                                        ficha
                                JOIN usuarios ON usuarios.idusuario = ficha.idusuario
                                JOIN institucion ON usuarios.idinstitucion = institucion.idinstitucion
                                LEFT JOIN salud ON ficha.idsalud = salud.idsalud
                                WHERE
                                        ficha.fec_consulta <= '{$this->fecha2}' 
                                AND ficha.fec_consulta >= '{$this->fecha1}'
                                GROUP BY
                                        salud.sal_descripcion,
                                        ins_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

                public function coberturaSalud(){
			$con = new Conexion();
			$sql = "SELECT
                                        CASE
                                WHEN salud.sal_descripcion IS NULL THEN
                                        'Sin respuesta'
                                ELSE
                                        salud.sal_descripcion
                                END AS sal_descripcion,
                                COUNT (ficha.per_dni) AS consultantes,
                                (
                                        SELECT
                                                COUNT (ficha.per_dni)
                                        FROM
                                                ficha,
                                                institucion,
                                                usuarios
                                        WHERE
                                                ficha.idusuario = usuarios.idusuario
                                        AND usuarios.idinstitucion = institucion.idinstitucion
                                        AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
                                        AND ficha.fec_consulta <= '{$this->fecha2}' 
                                        AND ficha.fec_consulta >= '{$this->fecha1}'
                                ) AS total,
                                (
                                        round(
                                                COUNT (ficha.per_dni) / (
                                                        SELECT
                                                                COUNT (ficha.per_dni)
                                                        FROM
                                                                ficha,
                                                                institucion,
                                                                usuarios
                                                        WHERE
                                                                ficha.idusuario = usuarios.idusuario
                                                        AND usuarios.idinstitucion = institucion.idinstitucion 
                                                        AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
                                                        AND ficha.fec_consulta <= '{$this->fecha2}' 
                                                        AND ficha.fec_consulta >= '{$this->fecha1}'
                                                ) :: NUMERIC,
                                                3
                                        )
                                ) * 100 AS pnormal,
                                institucion.ins_descripcion
                                FROM
                                        ficha
                                JOIN usuarios ON usuarios.idusuario = ficha.idusuario
                                JOIN institucion ON usuarios.idinstitucion = institucion.idinstitucion
                                LEFT JOIN salud ON ficha.idsalud = salud.idsalud
                                WHERE
                                        institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
                                AND ficha.fec_consulta <= '{$this->fecha2}' 
                                AND ficha.fec_consulta >= '{$this->fecha1}'
                                GROUP BY
                                        salud.sal_descripcion,
                                        ins_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

                public function tipoViviendaDep(){
			$con = new Conexion();
			$sql = "SELECT
                                        CASE
                                WHEN vivienda.viv_descripcion IS NULL THEN
                                        'Sin respuesta'
                                ELSE
                                        vivienda.viv_descripcion
                                END AS viv_descripcion,
                                COUNT (ficha.per_dni) AS consultantes,
                                (
                                        SELECT
                                                COUNT (ficha.per_dni)
                                        FROM
                                                ficha,
                                                institucion,
                                                usuarios
                                        WHERE
                                                ficha.idusuario = usuarios.idusuario
                                        AND usuarios.idinstitucion = institucion.idinstitucion
                                        AND ficha.fec_consulta <= '{$this->fecha2}' 
                                        AND ficha.fec_consulta >= '{$this->fecha1}'
                                ) AS total,
                                (
                                        round(
                                                COUNT (ficha.per_dni) / (
                                                        SELECT
                                                                COUNT (ficha.per_dni)
                                                        FROM
                                                                ficha,
                                                                institucion,
                                                                usuarios
                                                        WHERE
                                                                ficha.idusuario = usuarios.idusuario
                                                        AND usuarios.idinstitucion = institucion.idinstitucion 
                                                        AND ficha.fec_consulta <= '{$this->fecha2}' 
                                                        AND ficha.fec_consulta >= '{$this->fecha1}'
                                                ) :: NUMERIC,
                                                3
                                        )
                                ) * 100 AS pnormal,
                                institucion.ins_descripcion
                                FROM
                                        ficha
                                JOIN usuarios ON usuarios.idusuario = ficha.idusuario
                                JOIN institucion ON usuarios.idinstitucion = institucion.idinstitucion
                                LEFT JOIN vivienda ON ficha.idvivienda = vivienda.idvivienda
                                WHERE
                                        ficha.fec_consulta <= '{$this->fecha2}' 
                                AND ficha.fec_consulta >= '{$this->fecha1}'
                                GROUP BY
                                        vivienda.viv_descripcion,
                                        ins_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

                public function tipoVivienda(){
			$con = new Conexion();
			$sql = "SELECT
                                        CASE
                                WHEN vivienda.viv_descripcion IS NULL THEN
                                        'Sin respuesta'
                                ELSE
                                        vivienda.viv_descripcion
                                END AS viv_descripcion,
                                COUNT (ficha.per_dni) AS consultantes,
                                (
                                        SELECT
                                                COUNT (ficha.per_dni)
                                        FROM
                                                ficha,
                                                institucion,
                                                usuarios
                                        WHERE
                                                ficha.idusuario = usuarios.idusuario
                                        AND usuarios.idinstitucion = institucion.idinstitucion
                                        AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
                                        AND ficha.fec_consulta <= '{$this->fecha2}' 
                                        AND ficha.fec_consulta >= '{$this->fecha1}'
                                ) AS total,
                                (
                                        round(
                                                COUNT (ficha.per_dni) / (
                                                        SELECT
                                                                COUNT (ficha.per_dni)
                                                        FROM
                                                                ficha,
                                                                institucion,
                                                                usuarios
                                                        WHERE
                                                                ficha.idusuario = usuarios.idusuario
                                                        AND usuarios.idinstitucion = institucion.idinstitucion 
                                                        AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
                                                        AND ficha.fec_consulta <= '{$this->fecha2}' 
                                                        AND ficha.fec_consulta >= '{$this->fecha1}'
                                                ) :: NUMERIC,
                                                3
                                        )
                                ) * 100 AS pnormal,
                                institucion.ins_descripcion
                                FROM
                                        ficha
                                JOIN usuarios ON usuarios.idusuario = ficha.idusuario
                                JOIN institucion ON usuarios.idinstitucion = institucion.idinstitucion
                                LEFT JOIN vivienda ON ficha.idvivienda = vivienda.idvivienda
                                WHERE
                                        institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
                                AND ficha.fec_consulta <= '{$this->fecha2}' 
                                AND ficha.fec_consulta >= '{$this->fecha1}'
                                GROUP BY
                                        vivienda.viv_descripcion,
                                        ins_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}
	}
?>