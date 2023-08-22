<?php

namespace App\Models\Support;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    public function Customer()
    {
        return $this->belongsTo(Customer::class)->whereBranchId(auth()->user()->branch_id);
    }
    public function Customers()
    {
        return auth()->user()->Branch->Customers();
    }
    public function Category()
    {
        return $this->belongsTo(Category::class)->where('branch_id',null)->orwhere('branch_id',auth()->user()->id);
    }

    public function Priority()
    {
        return $this->belongsTo(Priority::class);
    }

    public function Status()
    {
        return $this->belongsTo(Status::class,'status_id','id');
    }

    public function Teams()
    {
        return $this->belongsToMany(Team::class)->withTrashed();
    }

    public function AssignedTo()
    {
        return $this->belongsTo(User::class, 'assigned_to')->withTrashed();
    }

    public function AssignedToTeam()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }

    public function CreatedBy()
    {
        return $this->belongsTo(User::class, 'created_by')->withTrashed();
    }

    public function ClosedBy()
    {
        return $this->belongsTo(User::class, 'closed_by')->withTrashed();
    }

    public function LastRepliedBy()
    {
        return $this->belongsTo(User::class, 'last_replied_by')->withTrashed();
    }

    public function Replies()
    {
        return $this->hasMany(Reply::class, 'ticket_id');
    }

   

    public function Histories()
    {
        return $this->hasMany(History::class, 'ticket_id');
    }
    public function Branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
