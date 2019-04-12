<?php

namespace App\Http\Controllers;

use App\Change;
use App\Port;
use App\Template;
use Asm\Ansible\Ansible;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('ports.index', ['ports' => Port::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Port $port
     * @return \Illuminate\Http\Response
     */
    public function show(Port $port)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @return View
     */
    public function edit($id)
    {
        // Return View with template and changes data, as well as eager loaded attributes for changes
        return view('ports.update',
            [
                'port' => Port::find($id),
                'templates' => Template::all(),
                'changes' => Change::with(['template', 'user', 'port'])->get()->where('port_id', '=', $id)
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $ansible = new Ansible('/home/tiebevn/School/Stage/Ansible');

        $ansible->playbook()->play('helloworld.yml')->execute();
        $port = Port::find($id);
        $template = Template::find($request->get('template'));
        if($port->vlan != $template->vlan) {
            $change = new Change([
                'port_id' => $port->id,
                'template_id' => $template->id,
                'user_id' => Auth::id()
            ]);
            $change->save();
        }
        $port->vlan = $template->vlan;
        $port->description = $request->get('description');
        $port->save();
        return redirect('/devices/' . $port->device_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Port $port
     * @return \Illuminate\Http\Response
     */
    public function destroy(Port $port)
    {
        //
    }
}
