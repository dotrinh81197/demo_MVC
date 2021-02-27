<?php

require_once("controllers/_base_controller.php");
require_once("models/product.php");
class ProductsController extends BaseController
{
    protected function getFolder()
    {
        return "products";
    }
    public function index()
    {
        $data = Products::all();
        $viewdata = array(
            "products" => $data,
            
        );
       


        $this->render("index", $viewdata);
    }

    public function create()
    {
        $this->render("products", "create");
    }

    public function edit()
    {
        $this->render("products", "edit");
    }

    // protected function render($file_name){
    //     // Kiểm tra file gọi đến có tồn tại hay không?
    //     $view_file = "views/products/$file_name.php";

    //     // Nếu tồn tại file đó thì tạo ra các biến chứa giá trị truyền vào lúc gọi hàm
    //     if (is_file($view_file)) {
    //     // extract($data);


    //     // Sau đó lưu giá trị trả về khi chạy file view template với các dữ liệu đó vào 1 biến chứ chưa hiển thị luôn ra trình duyệt
    //     ob_start();
    //     include_once($view_file);
    //     $content = ob_get_clean();

    //     // Sau khi có kết quả đã được lưu vào biến $content, gọi ra template chung của hệ thống để hiển thị cho người dùng
    //     include_once("views/shared/layout.php");
    //     }
    // }
}
