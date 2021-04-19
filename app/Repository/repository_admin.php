<?php


namespace App\Repository;


use App\DB\Create\create_admin;
use App\Models\address;
use App\Models\attr_filter;
use App\Models\banner_center;
use App\Models\banner_up;
use App\Models\basket;
use App\Models\brand;
use App\Models\city;
use App\Models\comment_product;
use App\Models\image_product;
use App\Models\product;
use App\Models\property;
use App\Models\reply_comment;
use App\View\message;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class repository_admin
{
    /**
     * @var create_admin
     */
    private $create_admin;

    public function __construct(create_admin $create_admin)
    {
        $this->create_admin = $create_admin;
    }

    public function deleteAddress($data)
    {
        return $this->create_admin->delete_address($data->id);
    }

    public function deleteAttrFilter($data)
    {
        return $this->create_admin->delete_attr_filter($data->id);

    }

    public function createAttrFilter(Request $request)
    {
        return $this->create_admin->create_attr_filter($request);
    }

    public function createBannerCenter(Request $request)
    {
        return $this->create_admin->create_banner_center($request);
    }

    public function deleteBannerCenter($data)
    {
        return $this->create_admin->delete_banner_center($data->id);
    }

    public function deleteBannerUp($data)
    {
        return $this->create_admin->delete_banner_up($data);

    }

    public function deleteBrand($data)
    {
        return $this->create_admin->delete_brand($data);
    }

    public function createBannerUp(Request $request)
    {
        return $this->create_admin->create_banner_up($request);
    }

    public function createBrand(Request $request)
    {
        return $this->create_admin->create_brand($request);

    }

    public function deleteBasket($data)
    {
        return $this->create_admin->delete_basket($data);
    }

    public function deleteCity($data)
    {
        return $this->create_admin->delete_city($data);
    }

    public function deleteCommentAdmin($data)
    {
        return $this->create_admin->delete_comment_admin($data);
    }

    public function createCity(Request $request)
    {
        return $this->create_admin->create_city($request);
    }

    public function createCommentAdmin(Request $request)
    {
        return $this->create_admin->create_comment_admin($request);
    }

    public function inactiveCommentProduct($data)
    {
        return $this->create_admin->inactive_comment_product($data);
    }

    public function deleteCommentProduct($id)
    {
        return $this->create_admin->deleteCommentProduct($id);
    }

    public function deleteReplyComment($id)
    {
        return $this->create_admin->deleteReplyComment($id);
    }

    public function deleteProduct($id)
    {
        return $this->create_admin->deleteProduct($id);
    }

    public function createProduct(Request $request)
    {
        return $this->create_admin->deleteProduct($request);
    }

    public function editProduct($id)
    {
        return view('admin.section.viewProduct', compact('id'));
    }

    public function updateProduct($data , $id)
    {
        return $this->create_admin->updateProduct($data,$id);


    }

    public function deleteImageProduct($id)
    {
        return $this->create_admin->deleteImageProduct($id);
    }

    public function deleteProperty($id)
    {
        return $this->create_admin->deleteProperty($id);
    }
    public function createImageProduct(Request $request){
        return $this->create_admin->createImageProduct($request);

    }

    public function createProperty(Request $request)
    {
        return $this->create_admin->createProperty($request);
    }
}
