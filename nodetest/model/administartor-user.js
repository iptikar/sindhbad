// Get db dbconnection 


var administrator = {
	
		user: function (req, res, db) {
			
			db.createCollection("admin_user", {
   validator: {
      $jsonSchema: {
         bsonType: "object",
         properties: {
            user_id: {
               bsonType: "string"
             },
             
             firstname: {
               bsonType: "string"
             },
             
             email: {
               bsonType: "string"
             },
             
             username: {
               bsonType: "string"
             },
             
             password: {
               bsonType: "int"
             },
             
             create_at: {
               bsonType: "date"
             },
             
             updated_at: {
               bsonType: "date"
             },
             
             logdate: {
               bsonType: "date"
             },
             
             is_active: {
               bsonType: "string"
             },
             
             firstfailures: {
              bsonType: "int"
             },
             
             status: {
               enum: ['0','1']

             },
             
             refresh_token: {
               bsonType: "string"
             },
             
             failure_number: {
                bsonType: "int"
             }
  
         }
      }
   }
})
	
					
			}
	}

module.exports.administrator = administrator;
