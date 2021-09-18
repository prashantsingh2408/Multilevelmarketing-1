<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeLettersController;
use App\Http\Controllers\TdsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PopupController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//------------ADMIN SECTION-----------//
Route::get('/', function () {
    return view('Admin/login');
});
Route::prefix('Admin')->group(function () {

    Route::get('/', [AdminController::class, 'index']);
    Route::post('/auth', [AdminController::class, 'auth']);
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::match(['get', 'post'], '/account-info/{add?}/{id?}', [AdminController::class, 'account_info']);
    Route::get('/tds', [TdsController::class, 'tds']);
    Route::post('/tds', [TdsController::class, 'tds_post']);
    Route::get('/generatepindirects', [AdminController::class, 'generatepindirects']);
    Route::post('/generatepindirects_show_name', [AdminController::class, 'generatepindirects_show_name']);
    Route::post('/generatepindirects_issue', [AdminController::class, 'generatepindirects_issue']);
    Route::post('/issue_post', [AdminController::class, 'issue_post']);
    Route::get('/pinsreport', [AdminController::class, 'pinsreport']);
    Route::post('/pinsreport', [AdminController::class, 'pinsreport_post']);
    //Search pins
    Route::post('/searchpins', [AdminController::class, 'searchpins']);
    Route::get('/issuepin/{id}', [AdminController::class, 'issuepin']);
    Route::get('/deleterequest/{id}', [AdminController::class, 'deleterequest']);
    //edit and detele for pins routes
    Route::get('/editpins/{id}', [AdminController::class, 'editpins']);
    Route::get('/deletepins/{id}', [AdminController::class, 'deletepins']);
    Route::get('/pinsrequest', [AdminController::class, 'pinsrequest']);
    Route::get('/memberslist', [AdminController::class, 'memberslist']);
    Route::post('/get_detail', [AdminController::class, 'get_detail']);
    Route::get('/topup_2', [AdminController::class, 'topup-2']);
    Route::get('/member-profile', [AdminController::class, 'member_profile']);
    Route::post('/getprofile', [AdminController::class, 'getprofile']);
    Route::get('/change-my-profile/{id}', [AdminController::class, 'change_my_profile']);
    Route::get('/topupreport', [AdminController::class, 'topupreport']);
    Route::post('/searchtopup', [AdminController::class, 'searchtopup']);
    Route::post('/searchMember', [AdminController::class, 'searchMember']);
    Route::post('/memberSearch', [AdminController::class, 'memberSearch']);
    
    //Route For Welcome Letter Post

    Route::post('/postWelcomeLetter', [WelcomeLettersController::class, 'store']);
    Route::post('/update_user_profile', [AdminController::class, 'update_user_profile']);
    Route::get('/manage-member', [AdminController::class, 'manage_member']);
    Route::get('/total-member', [AdminController::class, 'total_member']);
    Route::get('/welcome-letter', [AdminController::class, 'welcome_letter']);
    Route::get('/kyc', [AdminController::class, 'kyc']);
    Route::post('/getkycdetails', [AdminController::class, 'getkycdetails']);
    Route::get('/new-registration', [AdminController::class, 'new_registration']);
    Route::get('/level-tree-view', [AdminController::class, 'level_tree_view']);
    Route::get('/rank-level-tree-view-associate', [AdminController::class, 'rank_level_tree_view_associate']);
    Route::get('/rank-level-tree-view-supervisor', [AdminController::class, 'rank_level_tree_view_supervisor']);
    Route::get('/rank-level-tree-view-manager', [AdminController::class, 'rank_level_tree_view_manager']);
    Route::get('/rank-level-tree-view-chief-manager', [AdminController::class, 'rank_level_tree_view_chief_manager']);
    Route::get('/rank-level-tree-view-ceo', [AdminController::class, 'rank_level_tree_view_ceo']);
    Route::get('/rank-level-tree-view-vice-president', [AdminController::class, 'rank_level_tree_view_vice_president']);
    Route::get('/rank-level-tree-view-president', [AdminController::class, 'rank_level_tree_view_president']);
    Route::get('/product-wise-sales', [AdminController::class, 'product_wise_sales']);
    Route::get('/direct-income', [AdminController::class, 'direct_income']);
    Route::get('/level-income', [AdminController::class, 'level_income']);
    Route::get('/rank-level-income', [AdminController::class, 'rank_level_income']);
    Route::get('/auto-pool-income', [AdminController::class, 'auto_pool_income']);
    Route::get('/rank-level-process', [AdminController::class, 'rank_level_process']);
    Route::get('/auto-pool-process', [AdminController::class, 'auto_pool_process']);
    Route::get('/weekly-payment-report', [AdminController::class, 'weekly_payment_report']);
    Route::get('/paid-payment-report', [AdminController::class, 'paid_payment_report']);
    Route::get('/transaction-report', [AdminController::class, 'transaction_report']);
    Route::get('/add-wallet-amount', [AdminController::class, 'add_wallet_amount']);
    Route::get('/deduct-wallet-amount', [AdminController::class, 'deduct_wallet_amount']);
    Route::get('/ticket-list', [AdminController::class, 'ticket_list']);

    Route::get('/volunteer-details', [AdminController::class, 'volunteer_details']);
    Route::get('/pop-up', [PopupController::class, 'index']);
    Route::post('/addPopup', [PopupController::class, 'store']);
    Route::get('deletepopup/{id}', [PopupController::class, 'destroy']);
    Route::post('/blockUser', [AdminController::class, 'blockUser']);
    
    //Route for Product and
    Route::get('/product-details', [ProductController::class, 'index']);
    Route::post('/add_product', [ProductController::class, 'store']);
    Route::post('/update_product', [ProductController::class, 'update']);
    Route::get('/delete_product/{id}', [ProductController::class, 'destroy']);
    Route::POST('/getproduct', [ProductController::class, 'getproduct']);
    Route::post('/getpackage', [ProductController::class, 'getpackagedata']);

    // Route For Wallert Report
    Route::get('/wallet-report', [WalletController::class, 'index']);
    Route::post('/search_in_wallet', [WalletController::class, 'show']);
    
    //Route for news
    Route::get('/news', [NewsController::class, 'index']);
    Route::post('/postNews', [NewsController::class, 'store']);
    Route::get('/logout', [AdminController::class, 'logout']);
});

//-------------USER SECTION-----------///

Route::get('/User', [UserController::class, 'index']);
Route::post('User/auth', [UserController::class, 'auth']);
Route::group(['prefix' => 'User', 'middleware' => ['user']], function () {

    Route::any('/dashboard', [UserController::class, 'dashboard']);
    Route::get('/new-registration', [UserController::class, 'new_registration']);
    Route::get('/profile', [UserController::class, 'profile']);
    Route::any('/change-my-profile', [UserController::class, 'change_my_profile']);
    Route::get('/change-password', [UserController::class, 'change_password']);
    Route::post('/update-password', [UserController::class, 'update_password']);
    Route::any('/bank-details', [UserController::class, 'bank_details']);
    Route::get('/kyc', [UserController::class, 'kyc']);
    Route::post('/kyc', [UserController::class, 'kyc']);
    Route::get('/welcome-letter', [UserController::class, 'welcome_letter']);
    Route::any('/transfer-pin', [UserController::class, 'transfer_pin']);
    Route::post('/transferpin_show_name', [UserController::class, 'transferpin_show_name']);
    Route::post('/pin_transfer', [UserController::class, 'pin_transfer']);
    Route::post('/transfer_post', [UserController::class, 'transfer_post']);
    Route::any('/pins-request', [UserController::class, 'pins_request']);
    Route::get('/pins-report', [UserController::class, 'pins_report']);
    Route::get('/transfer-pin-report', [UserController::class, 'transfer_pin_report']);
    Route::get('/top-up', [UserController::class, 'top_up']);
    Route::get('/direct-team', [UserController::class, 'direct_team']);
    Route::get('/level-tree-views', [UserController::class, 'level_tree_views']);
    Route::get('/rank-level-tree-view-associate', [UserController::class, 'rank_level_tree_view_associate']);
    Route::get('/rank-level-tree-view-supervisor', [UserController::class, 'rank_level_tree_view_supervisor']);
    Route::get('/rank-level-tree-view-manager', [UserController::class, 'rank_level_tree_view_manager']);
    Route::get('/rank-level-view-cheif-manager', [UserController::class, 'rank_level_tree_view_cheif_manager']);
    Route::get('/rank-level-view-ceo', [UserController::class, 'rank_level_tree_view_ceo']);
    Route::get('/rank-level-view-vice-president', [UserController::class, 'rank_level_tree_view_vice_president']);
    Route::get('/rank-level-view-president', [UserController::class, 'rank_level_tree_view_president']);
    Route::get('/transaction-report', [UserController::class, 'transaction_report']);
    Route::get('/direct-income', [UserController::class, 'direct_income']);
    Route::get('/level-income', [UserController::class, 'level_income']);
    Route::get('/rank-level-income', [UserController::class, 'rank_level_income']);
    Route::get('/my-rewards', [UserController::class, 'my_rewards']);
    Route::get('/cash-wallet', [UserController::class, 'cash_wallet']);
    Route::get('/payout-report', [UserController::class, 'payout_report']);
    Route::get('/transfer-wallet-amount', [UserController::class, 'transfer_wallet_amount']);
    Route::any('/generate-ticket', [UserController::class, 'generate_ticket']);
    Route::get('/ticket-list', [UserController::class, 'ticket_list']); 
    Route::get('/logout', [UserController::class, 'logout']);

});


///--------------WEB SECTION----------///
Route::group(['prefix' => 'web'], function () {
    Route::get('/register', [WebController::class, 'index']);
    Route::post('/register', [WebController::class, 'post']);
    Route::post('/update', [WebController::class, 'update']);
    Route::post('/getUser', [WebController::class, 'getUser']);
    Route::post('/update_by_user', [WebController::class, 'update_by_user']);
    Route::get('/edit_user/{id}', [WebController::class, 'edit']);
    Route::get('/edit_by_user/{id}', [WebController::class, 'edit_by_user']);
});
