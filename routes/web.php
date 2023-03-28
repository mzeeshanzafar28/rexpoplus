<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ActivePackageController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\RewardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TeamController;

// Webflow Route
Route::get('tyimccray-signup', [AuthController::class, 'userInfo']);

// Auth Routes
Route::get('register/{reference_link?}', [AuthController::class, 'register_page']);
Route::get('login', [AuthController::class, 'login_page'])->name('login');
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::get('verify-email', [AuthController::class, 'verifyEmailPage']);
Route::post('verify-email', [AuthController::class, 'verifyEmail']);
Route::get('forgot-password', [AuthController::class, 'forgotPasswordPage']);
Route::post('forgot-password', [AuthController::class, 'forgotPassword']);
Route::get('recover-password/{verification_string}', [AuthController::class, 'recoverPasswordPage']);
Route::post('recover-password', [AuthController::class, 'recoverPassword']);

// Routes
Route::get('/', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/services', [MainController::class, 'services']);
Route::get('/privacy-policy', [MainController::class, 'privacyPolicy']);

Route::get('/profits/{userId}/{amount}', [ActivePackageController::class, 'distributeProfits']);

// Middleware Routes
Route::group(['middleware' => 'auth'], function(){
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('/user/dashboard', [MainController::class, 'dashboard']);
    Route::get('/user/settings/account', [MainController::class, 'accountSettings']);
    Route::get('/user/settings/security', [MainController::class, 'securitySettings']);
    // Update Basic Profile
    Route::post('user/update-profile', [AuthController::class, 'updateProfile']);
    Route::post('user/update-password', [AuthController::class, 'updatePassword']);
    Route::post('user/update-security-code', [AuthController::class, 'updateSecurityCode']);
    // Packages Work
    Route::get('/user/packages', [PackageController::class, 'packages']);
    Route::post('users/activate-package', [ActivePackageController::class, 'activatePackage']);
    Route::get('user/cancel-package/{package_id}', [ActivePackageController::class, 'cancelPackage']);

    // Invite / Refernce
    Route::get('user/invite-users', [MainController::class, 'inviteUsersPage']);

    // Wallet Routes
    Route::get('user/my-wallet', [WalletController::class, 'walletPage']);
    Route::post('user/wallet/deposit', [WalletController::class, 'deposit']);
    Route::get('user/wallet/crypto-payment/{payment_id}', [WalletController::class, 'cryptoPayment']);
    Route::get('user/wallet/doshthru/success', [WalletController::class, 'doshthruSuccess']);
    Route::get('user/wallet/doshthru/cancel', [WalletController::class, 'doshthruCancel']);
    Route::get('user/wallet/send', [WalletController::class, 'sendPayment']);
    Route::get('/user/wallet/send/confirm', [WalletController::class, 'confirmPayment']);
    Route::post('user/wallet/send', [WalletController::class, 'transferFunds']);
    Route::get('user/wallet/withdraw', [WalletController::class, 'withdrawFunds']);
    Route::post('user/wallet/withdraw', [WalletController::class, 'withdraw']);
    
    Route::post('user/wallet/save-bank-details', [WalletController::class, 'saveBankDetails']);
    Route::post('user/wallet/save-martinpay-details', [WalletController::class, 'saveMartinpayDetails']);
    Route::post('user/wallet/save-binance-details', [WalletController::class, 'saveBinanceDetails']);

    // Reward Routes
    Route::get('user/rewards', [RewardController::class, 'rewardsPage']);
    Route::post('user/activate-reward', [RewardController::class, 'activateReward']);
    Route::post('user/expire-reward', [RewardController::class, 'expireReward']);

    // Chart Data
    Route::get('user/get-chart-data', [MainController::class, 'chartData']);

    Route::get('user/wallet/profit/main', [WalletController::class, 'toMainWallet']);

});


// Admin Routes
Route::get('admin/login', [AdminController::class, 'loginPage'])->name('admin_login');
Route::post('admin/login', [AdminController::class, 'login']);
Route::group(['middleware' => 'adminAuth', 'prefix' => 'admin'], function(){

    Route::get('logout', [AdminController::class, 'logout']);

    Route::get('dashboard', [AdminController::class, 'dashboard']);
    Route::get('users', [AdminController::class, 'users']);
    Route::get('users/profile/{user_id}', [AdminController::class, 'userProfile']);

    Route::get('account-balances', [AdminController::class, 'accounts']);

    // Withdraws
    Route::get('withdraws', [WalletController::class, 'all_withs']);
    Route::get('withdraws/approved', [WalletController::class, 'approved_withs']);
    Route::get('withdraws/rejected', [WalletController::class, 'rejected_withs']);
    Route::post('withdraw/approve', [WalletController::class, 'approveWithdraw']);
    Route::post('withdraw/reject', [WalletController::class, 'rejectWithdraw']);
    Route::get('transactions', [WalletController::class, 'transactionsAll']);
    Route::get('deposits', [WalletController::class, 'depositsAll']);

    // Rewards
    Route::get('rewards', [RewardController::class, 'allRewards']);
    Route::get('active-rewards', [RewardController::class, 'activeRewards']);
    
    Route::get('packages', [ActivePackageController::class, 'allPackages']);
    Route::get('active-packages', [ActivePackageController::class, 'allActivePackages']);

    //send balance
    Route::get('send-balance', [WalletController::class, 'sendBalancePage']);
    Route::post('send-balance', [WalletController::class, 'sendBalace']);
    //user transactions
    Route::get('transactions/{id}', [WalletController::class, 'singleUserTransactions']);
    // Settings
    Route::get('account-settings', [AdminController::class, 'settings']);
    Route::post('save-details', [AdminController::class, 'saveDetails']);
    Route::post('save-password', [AdminController::class, 'savePassword']);
    
    //sytem settings
    Route::get('system-settings', [SettingController::class, 'getSettings']);
    Route::post('save-transfer-fee', [SettingController::class, 'saveSettings']);

    //Roles and Permissions
    Route::get('roles', [RoleController::class, 'index']);
    Route::post('save-roles', [RoleController::class, 'store']);
    Route::get('delete-role/{id}', [RoleController::class, 'removeRole']);

    Route::get('manage-permissions/{roleId}', [RoleController::class, 'getPermissions']);
    Route::post('save-permissions', [RoleController::class, 'savePermissions']);

    Route::get('team-management', [TeamController::class, 'index']);
    Route::get('add-team-member', [TeamController::class, 'addTeam']);
    Route::get('teams/edit/{id}', [TeamController::class, 'editTeam']);
    Route::post('save-team', [TeamController::class, 'store']);

});