<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateShippingRequest;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;

class ShippingController extends AppBaseController
{

	/**
	 * Display a listing of the Post.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$query = Shipping::query();
        $columns = Schema::getColumnListing('$TABLE_NAME$');
        $attributes = array();

        foreach($columns as $attribute){
            if($request[$attribute] == true)
            {
                $query->where($attribute, $request[$attribute]);
                $attributes[$attribute] =  $request[$attribute];
            }else{
                $attributes[$attribute] =  null;
            }
        };

        $shippings = $query->get();

        return view('shippings.index')
            ->with('shippings', $shippings)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Shipping.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('shippings.create');
	}

	/**
	 * Store a newly created Shipping in storage.
	 *
	 * @param CreateShippingRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateShippingRequest $request)
	{
        $input = $request->all();

		$shipping = Shipping::create($input);

		//Flash::message('Shipping saved successfully.');
		Alert::success('Mensaje creado exitosamente');

		return redirect(route('shippings.index'));
	}

	/**
	 * Display the specified Shipping.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$shipping = Shipping::find($id);

		if(empty($shipping))
		{
			Flash::error('Shipping not found');
			return redirect(route('shippings.index'));
		}

		return view('shippings.show')->with('shipping', $shipping);
	}

	/**
	 * Show the form for editing the specified Shipping.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$shipping = Shipping::find($id);

		if(empty($shipping))
		{
			Flash::error('Shipping not found');
			return redirect(route('shippings.index'));
		}

		return view('shippings.edit')->with('shipping', $shipping);
	}

	/**
	 * Update the specified Shipping in storage.
	 *
	 * @param  int    $id
	 * @param CreateShippingRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateShippingRequest $request)
	{
		/** @var Shipping $shipping */
		$shipping = Shipping::find($id);

		if(empty($shipping))
		{
			Flash::error('Shipping not found');
			return redirect(route('shippings.index'));
		}

		$shipping->fill($request->all());
		$shipping->save();

		Flash::message('Shipping updated successfully.');

		return redirect(route('shippings.index'));
	}

	/**
	 * Remove the specified Shipping from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Shipping $shipping */
		$shipping = Shipping::find($id);

		if(empty($shipping))
		{
			Flash::error('Shipping not found');
			return redirect(route('shippings.index'));
		}

		$shipping->delete();

		Flash::message('Shipping deleted successfully.');

		return redirect(route('shippings.index'));
	}
}
