<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;

class SimulationsController extends Controller {

    public function simulations(){
        $user_id = 42;
        $simulations = DB::select('SELECT s.scenario_id, s.name, ss.simulation_id, ss.created_at, ss.actual_start, ss.end, ssu.user_id
            from scenario s 
            join simulation ss on s.scenario_id = ss.scenario_id
            join user_simulation ssu on ss.simulation_id= ssu.simulation_id
            where ssu.user_id = ?
            and ssu.role_id not in ( 9, 10) ', array($user_id)); // 9 is reviewer and 10 is instructor role - rest is student role

        if (count($simulations) > 0 ) {
            foreach ($simulations as $simulation){
                $actions = DB::select('select s.simulation_id, s.phase_id, s.sim_action_id, sss.title, sss.description, s.score_option_id , round(avg(ss.value),2) as avg_score, ss.affects_grade
                    from score s 
                    join score_option ss on s.score_option_id = ss.score_option_id
                    join sim_action sss on s.sim_action_id = sss.sim_action_id
                    where s.simulation_id = ?
                    group by s.simulation_id, s.phase_id, s.sim_action_id, sss.title, sss.description', array($simulation->simulation_id));
                $simulation->actions = $actions;
            }
        }

        return $simulations;
    }
}