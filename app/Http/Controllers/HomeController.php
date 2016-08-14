<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;

class HomeController extends Controller {

    public function userDetails($id = null){
        $user = DB::select('
                    select user_id, user_name, experience, level, xl.title
                    from ( 
                        select s.reviewee as user_id, su.user_name, sum(score_option_id) as experience, (ceil(sum(score_option_id)/250) + 1) as level
                        from score s
                        join user su on s.reviewee = su.user_id
                        where s.reviewee = ?
                        group by s.reviewee
                        ) as x
                    join levels xl on x.level = xl.id',
            [$id]);//' where active = ?', [1]);
        return $user;
    }
    
    public function userBadges($id) {
        $badges = DB::select('
        select b.user_id, b.badge_id, b.simulation_id, b.notified, b.accepted, bb.title, bb.description, bb.url
        from badge_student b
        join badges bb on b.badge_id = bb.id
        where b.user_id = ?', [$id]);

        return $badges;
    }

    public function userChecklist($id) {
        $checklist = DB::select('select * 
            from checklist
            where user_id = ?;'
            , [$id]
        );

        return $checklist;
    }

    public function leaderboard() {
        $leaderboard = DB::select('
              select reviewee as user_id, fname,lname , round(avg(average_score), 2) as avg_sim_score
                from (
                        select s.simulation_id, s.reviewee, su.fname, su.lname, avg(percent_score) as average_score 
                        from (
                            select s.simulation_id, s.phase_id, s.sim_action_id, s.reviewee, avg(ss.value * 25) as percent_score
                            from score s 
                            join score_option ss on s.score_option_id = ss.score_option_id
                            join sim_action sss on s.sim_action_id = sss.sim_action_id
                            group by s.sim_action_id, s.phase_id, s.simulation_id, s.reviewee
                            order by s.simulation_id, s.phase_id, s.reviewee, s.sim_action_id
                    ) as s 
                        join user su on s.reviewee = su.user_id
                        group by s.simulation_id, s.reviewee
                    ) as x 
                where reviewee > 40 
                group by reviewee
                order by avg_sim_score desc
                limit 5;
        ');

        return $leaderboard;
    }

    public function allBadges(){
        $allBadges = DB::select('SELECT title,description,url FROM badges');
        return $allBadges;
    }

    public function updateBadges(Request $request){
        $rawData = $request->input('data');

        $id = 0;
        foreach($rawData as $item) {
            $affected = DB::update('update badge_student set notified = 1 where user_id = ? and badge_id = ? and simulation_id = ?', [$item['user_id'], $item['badge_id'], $item['simulation_id']]);
            $id += $affected;
        }

        return $id;

    }
}