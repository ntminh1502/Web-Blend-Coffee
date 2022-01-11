<?php session_start();
ob_start();
require_once("./connect.php");
if (isset($_SESSION['da_dang_nhap']) && $_SESSION['da_dang_nhap']==1) 
{
    if (!isset($_SESSION["cart"])) 
    {
        $_SESSION["cart"] = array();
    }
    if (isset($_GET['action']) && isset($_GET['item']) && $_GET['action'] != null && $_GET['item'] != null) 
    {
        $id=(int)$_GET['item'];
        $sql="SELECT * FROM tbl_san_pham WHERE id_san_pham=$id"; 
        $query=mysqli_query($con,$sql);
        if(mysqli_num_rows($query)!=0)
        {
            switch ($_GET['action']) 
            {
                case "addcart":
                        
                    if (isset($_SESSION['cart'])) 
                    {
                        if(isset($_SESSION['cart'][$id]))
                        { 
                            $_SESSION['cart'][$id]++; 
                        }
                        else
                        { 
                            $_SESSION['cart'][$id]=1; 
                        }
                    }
                    else
                    { 
                        $_SESSION['cart'][$id]=1;
                        
                    }
                    echo 
                        "
                            <script type='text/javascript'>
                                window.alert('add cart thành công!');
                            </script>
                        ";
                        break;
                case "delete":
                    if (isset($_GET['item'])) 
                    {
                        unset($_SESSION["cart"][$_GET['item']]);
                    }
                    break;
            }
                    
        }
        else
            {
                echo "khong ton tai sp trong csdl" ;
            }
    }
    elseif (isset($_GET['action']) && $_GET['action'] == "submit")
    {
                    if (isset($_POST["update_click"]))
                    { //Cập nhật số lượng sản phẩm
                        foreach ($_POST["qty"] as $id => $quantity) 
                        {
                            if ($quantity == 0) 
                            {
                                unset($_SESSION["cart"][$id]);
                            } 
                            else 
                            {
                                $_SESSION["cart"][$id] = $quantity;
                            }
                        }
                    }
    }
}else
{
    echo 
                        "
                            <script type='text/javascript'>
                                window.alert('u nedd to login');
                            </script>
                        ";
}
    echo 
                        "
                            <script type='text/javascript'>
                                history.back();
                            </script>
                        ";

?>