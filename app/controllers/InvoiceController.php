<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 8/27/14
 * Time: 3:08 PM
 */
Use Client;
class InvoiceController extends BaseController
{
    protected $client;
    protected $invoice;

    public function __construct(Client $client, Invoice $invoice)
    {
        $this->client = $client;
        $this->invoice = $invoice;

    }

    public function index()
    {
       $invoices= $this->invoice->all();

        return View::make('invoice.index', compact('invoices'));
    }

    public function show($id)
    {
        $invoice = $this->invoice->find($id);

        return View::make('invoice.show',compact('invoice'));

    }

    public function create()
    {
        $clients = $this->client->all();
        return View::make('invoice.create', compact('clients'));
    }

    public function store()
    {

        $invoice = new Invoice;
        $invoice->client_id = Input::get('client_id');
        $invoice->save();


        return Redirect::to('item/create');
    }







} 