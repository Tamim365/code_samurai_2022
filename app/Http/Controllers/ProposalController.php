<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposal;
use App\Models\Project;
use Illuminate\Support\Facades\DB;

class ProposalController extends Controller
{
    public function proposals(){
        return view("proposals");
    }
    public function add(Request $request){
        // dd($request);
        $proposal = new Proposal;
        // 'project_id','name', 'location', 'latitude','longitude','exec','cost','timespan','goal','proposal_date'
        $proposal->name = $request->name; 
        $proposal->location = $request->location;
        $proposal->latitude = $request->latitude;
        $proposal->longitude = $request->longitude;
        $proposal->exec = $request->exec;
        $proposal->cost = $request->cost;
        $proposal->timespan = $request->time_span;
        $proposal->goal = $request->goal;
        $proposal->proposal_date = $request->proposal_date;

        $save = $proposal->save();
        // dd($save);
        if($save){
            return back()->with('success','Proposal creation Successful');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }
    public function accept(Request $req,$id){
        $file = DB::table('proposals')
        ->where('project_id',$id)
        ->update(
            ['status' => "accepted"]
        );
        $proposal = DB::table("proposals")->where('project_id', $id)->first();
        // dd($proposal);

                $project = new Project;
                // 'name', 'location', 'latitude','longitude','exec','cost','timespan','goal','start_date','completion','actual_cost'
                
                $project->location = $proposal->location;
                $project->name = $proposal->name;
                $project->latitude = $proposal->latitude;
                $project->longitude = $proposal->longitude;
                $project->exec = $proposal->exec;
                $project->cost = $proposal->cost;
                $project->timespan = $proposal->timespan;
                $project->goal = $proposal->goal;
                $project->start_date = $proposal->proposal_date;

                $save = $project->save();
                // dd($save);
                if($save){
                    return back()->with('success','Proposal creation Successful');
                }else{
                    return back()->with('fail','Something went wrong, try again later');
                }

                $proposal->delete();


                
                // $proj = new Project;
                // $prop = DB::table('proposals')
                // ->where('project_id',$id);
                // $proj->name = 
                return redirect()->back();
        }
        public function decline(Request $req,$id){
            $file = DB::table('proposals')
                    ->where('project_id',$id)
                    ->update(
                        ['status' => "declined"]
                    );
                    return redirect()->back();
            }
}
