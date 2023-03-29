<?php  
namespace App\Models ;

use CodeIgniter\Model;

class Home_Login_model extends Model {
   protected $table = 'inscription' ;
   protected $primaryKey = ' idinscription' ;
   protected $allowedFields = [ 'nom' , 'password' ,'siege' ,'addressexploitation' ,'nomdirigeant' ,'debutexercice' ] ;
  
}



