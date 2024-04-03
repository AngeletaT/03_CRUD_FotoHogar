<?php
// $data = 'hola inmo controller';
// die('<script>console.log('.json_encode( $data ) .');</script>');

// $path = $_SERVER['DOCUMENT_ROOT'].'/angela/02_MVC_CRUD';
// include($path."/module/inmo/model/DAOinmo.php");
include("c:/xampp/htdocs/angela/FotoHogar/module/inmo/model/DAOinmo.php");

// include ("module/inmo/model/DAOinmo.php");
// session_start();

switch ($_GET['op']) {
    case 'list';
        // $data = 'hola inmo OP';
        // die('<script>console.log('.json_encode( $data ) .');</script>');

        try {
            $daoinmo = new DAOinmo();
            $rdo = $daoinmo->select_all_inmo();
            //die('<script>console.log('.json_encode( $rdo->num_rows ) .');</script>');
        } catch (Exception $e) {
            $callback = 'index.php?page=503';
            die('<script>window.location.href="' . $callback . '";</script>');
        }

        if (!$rdo) {
            $callback = 'index.php?page=503';
            die('<script>window.location.href="' . $callback . '";</script>');
        } else {
            include("module/inmo/view/list_inmo.php");
        }
        break;

    case 'create';
        // $data = 'hola crtl inmo create';
        // die('<script>console.log('.json_encode( $data ) .');</script>');

        include("module/inmo/model/validate.php");
        $check = true;

        if ($_POST) {
            // $data = 'hola create post inmo';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
            // die('<script>console.log('.json_encode( $_POST ) .');</script>');

            $check = validate();
            // die('<script>console.log('.json_encode( $check ) .');</script>');

            if ($check) {
                // die('<script>console.log('.json_encode( $_POST ) .');</script>');
                try {
                    // $data = 'hola create DAOInmo';
                    // die('<script>console.log('.json_encode( $data ) .');</script>');
                    // die('<script>console.log('.json_encode( $_POST ) .');</script>');

                    $daoinmo = new DAOinmo();
                    $rdo = $daoinmo->insert_inmo($_POST);
                } catch (Exception $e) {
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="' . $callback . '";</script>');
                }

                if ($rdo) {
                    echo '<script language="javascript">setTimeout(() => {
                            toastr.success("Creado en la base de datos correctamente");
                        }, 1000);</script>';
                    echo '<script language="javascript">setTimeout(() => {
                            window.location.href="index.php?page=controller_inmo&op=list";
                        }, 2000);</script>';
                } else {
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="' . $callback . '";</script>');
                }
            }
        } else {
            include("module/inmo/view/create_inmo.php");
        }
        break;

    case 'update';
        // $data = 'hola crtl inmo update';
        // die('<script>console.log('.json_encode( $data ) .');</script>');
        // die('<script>console.log('.json_encode( $_GET['id_ref'] ) .');</script>');

        include("module/inmo/model/validate.php");
        $check = true;


        if ($_POST) {
            // $data = 'hola update post inmo';
            // die('<script>console.log('.json_encode( $data ) .');</script>');
            $check = validate_for_update();
            // die('<script>console.log('.json_encode( $check ) .');</script>');

            if ($check) {
                // die('<script>console.log('.json_encode( $_POST ) .');</script>');
                try {
                    $daoinmo = new DAOinmo();
                    $rdo = $daoinmo->update_inmo($_POST);
                    // die('<script>console.log('.json_encode( $rdo ) .');</script>');
                } catch (Exception $e) {
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="' . $callback . '";</script>');
                }

                if ($rdo) {
                    echo '<script language="javascript">setTimeout(() => {
                            toastr.success("Modificado en la base de datos correctamente");
                        }, 1000);</script>';
                    echo '<script language="javascript">setTimeout(() => {
                            window.location.href="index.php?page=controller_inmo&op=list";
                        }, 2000);</script>';
                } else {
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="' . $callback . '";</script>');
                }
            } else {
                echo '<script language="javascript">setTimeout(() => {
                        window.location.href="index.php?page=controller_inmo&op=list";
                    }, 2000);</script>';
            }
        } else {
            try {
                $daoinmo = new DAOinmo();
                $rdo = $daoinmo->select_inmo($_GET['id']);
                $inmo = get_object_vars($rdo);
                // die('<script>console.log('.json_encode( $inmo ) .');</script>');
            } catch (Exception $e) {
                $callback = 'index.php?page=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }


            if (!$rdo) {
                $callback = 'index.php?page=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            } else {
                include("module/inmo/view/update_inmo.php");
            }
        }
        break;

    case 'read';
        // $data = 'hola crtl inmo read';
        // die('<script>console.log('.json_encode( $data ) .');</script>');
        // die('<script>console.log('.json_encode( $_GET['id_ref'] ) .');</script>');

        try {
            $daoinmo = new DAOinmo();
            $rdo = $daoinmo->select_inmo($_GET['id_ref']);
            $inmo = get_object_vars($rdo);
            // die('<script>console.log('.json_encode( $inmo ) .');</script>');
        } catch (Exception $e) {
            $callback = 'index.php?page=503';
            die('<script>window.location.href="' . $callback . '";</script>');
        }
        if (!$rdo) {
            $callback = 'index.php?page=503';
            die('<script>window.location.href="' . $callback . '";</script>');
        } else {
            include("module/inmo/view/read_inmo.php");
        }
        break;

    case 'delete';
        // $data = 'hola crtl inmo delete';
        // die('<script>console.log('.json_encode( $data ) .');</script>');
        // die('<script>console.log('.json_encode( $_GET['id_ref'] ) .');</script>');

        if ($_POST) {
            // die('<script>console.log('.json_encode( $_GET['id_ref'] ) .');</script>');
            try {
                $daoinmo = new DAOinmo();
                $rdo = $daoinmo->delete_inmo($_GET['id']);
            } catch (Exception $e) {
                $callback = 'index.php?page=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }
            if ($rdo) {
                echo '<script language="javascript">setTimeout(() => {
                        toastr.success("Borrado en la base de datos correctamente");
                    }, 1000);</script>';
                echo '<script language="javascript">setTimeout(() => {
                        window.location.href="index.php?page=controller_inmo&op=list";
                    }, 2000);</script>';
            } else {
                $callback = 'index.php?page=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }
        } else {

            try {
                $daoinmo = new DAOinmo();
                $rdo = $daoinmo->select_inmo($_GET['id']);
                $inmo = get_object_vars($rdo);
            } catch (Exception $e) {
                $callback = 'index.php?page=controller_inmo&op=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }

            if (!$rdo) {
                $callback = 'index.php?page=controller_inmo&op=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            } else {
                include("module/inmo/view/delete_inmo.php");
            }
        }
        break;

    case 'delete_all';
        // $data = 'hola inmo delete all';
        // die('<script>console.log('.json_encode( $data ) .');</script>');

        if ($_POST) {
            try {
                $daoinmo = new DAOinmo();
                $rdo = $daoinmo->delete_all_inmo();
            } catch (Exception $e) {
                $callback = 'index.php?page=controller_inmo&op=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }

            if ($rdo) {
                echo '<script language="javascript">setTimeout(() => {
                        toastr.success("Lista de inmuebles borrada correctamente");
                    }, 1000);</script>';
                $callback = 'index.php?page=controller_inmo&op=list';
                die('<script>window.location.href="' . $callback . '";</script>');
            } else {
                $callback = 'index.php?page=controller_inmo&op=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }
        } else {
            include("module/inmo/view/delete_all_inmo.php");
        }
        break;

    case 'dummies';
        // $data = 'hola inmo dummies';
        // die('<script>console.log('.json_encode( $data ) .');</script>');

        if ($_POST) {

            try {
                // $data = 'hola inmo dummies';
                // die('<script>console.log('.json_encode( $data ) .');</script>');

                $daoinmo = new DAOinmo();
                $rdo = $daoinmo->dummies_inmo();
            } catch (Exception $e) {
                $callback = 'index.php?page=controller_inmo&op=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }

            if ($rdo) {
                echo '<script language="javascript">setTimeout(() => {
                        toastr.success("Dummies creados correctamente");
                    }, 1000);</script>';
                $callback = 'index.php?page=controller_inmo&op=list';
                die('<script>window.location.href="' . $callback . '";</script>');
            } else {
                $callback = 'index.php?page=controller_inmo&op=503';
                die('<script>window.location.href="' . $callback . '";</script>');
            }
        } else {
            include("module/inmo/view/dummies_inmo.php");
        }

        break;

    case 'read_modal':
        // echo $_GET["modal"]; 
        // exit;

        try {
            $daoinmo = new DAOinmo();
            $rdo = $daoinmo->select_inmo($_GET['id']);
        } catch (Exception $e) {
            echo json_encode("error");
            exit;
        }
        if (!$rdo) {
            echo json_encode("error");
            exit;
        } else {
            $inmo = get_object_vars($rdo);
            echo json_encode($inmo);
            //echo json_encode("error");
            exit;
        }


    default;
        include("view/inc/error404.php");
        break;
}
?>