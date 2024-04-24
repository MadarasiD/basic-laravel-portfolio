<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\PortfolioItem;
use App\Models\Service;
use App\Models\SkillsItemSetting;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $serviceCount = Service::count();
        $portfolioCount = PortfolioItem::count();
        $skillsCount = SkillsItemSetting::count();
        $messageCount = Message::count();
        return view('admin.dashboard', compact('serviceCount', 'portfolioCount', 'skillsCount', 'messageCount'));
    }
}
