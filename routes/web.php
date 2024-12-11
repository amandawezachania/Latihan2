use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/signin', [UserController::class, 'signin']);

Route::post('/signin', [UserController::class, 'postSignin']);

Route::get('/signup', [UserController::class, 'signup']);

Route::post('/signup', [UserController::class, 'postSignup']);
