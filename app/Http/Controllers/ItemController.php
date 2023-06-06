<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Price;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // 商品詳細画面を表示する

    // @param int id
    // @return view

    public function show($id)
    {
        $item = Item::find($id);
        $prices = $item->prices;

        return view('publics/view', ['item' => $item]);
    }


    /**
     * 商品追加画面を表示する
     * 
     * @return view
     * 
     */
    public function items_add()
    {
        return view('admins/items_add');
    }


    // 商品を追加する

    public function ExeItemStore(Request $request)
    {

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = $image->storeAs('public/item_images', $filename);
        }

        $item = new Item;
        $item->name = $request->name;
        $item->kana = $request->kana;
        $item->img = $filename;
        $item->detail = $request->detail;
        $item->category_id = $request->category_id;
        $item->save();

        // 価格情報を保存
        $prices = $request->input('prices', []); // prices のデフォルト値は空の配列
        foreach ($request->prices as $priceData) {
            $price = new Price;
            $price->weight = $priceData['weight'];
            $price->price = $priceData['price'];
            $item->prices()->save($price);
        }



        return redirect()->route('items_admin')->with('success', '商品が登録されました。');
    }
}
