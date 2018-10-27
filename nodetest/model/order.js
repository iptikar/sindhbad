// Get db dbconnection 


var OrderModel = {
	
		createOrderModel: function (req, res, db) {
			
				db.createCollection("order", {
   validator: {
      $jsonSchema: {
         bsonType: "object",
         properties: {
            order_id: {
               bsonType: "string"
             },
             
             ipv4_address: {
               bsonType: "string"
             },
             
             ipv6_address: {
               bsonType: "string"
             },
             
             tax_amount: {
               bsonType: "int"
             },
             
             tax_persentage: {
               bsonType: "int"
             },
             
             discount: {
               bsonType: "int"
             },
             
             totalqty: {
               bsonType: "int"
             },
             
             totalamount: {
               bsonType: "string"
             },
             
             currency: {
               bsonType: "string"
             },
             
             shipping_cost: {
              bsonType: "int"
             },
             
             status: {
               enum: ['0','1']

             },
             
             shipping_address: {
               bsonType: "string"
             },
             
             billing_address: {
               bsonType: "string"
             },
             
             purchase_date: {
               bsonType: "date"
             },
             
             purchase_point: {
                bsonType: "string"
             },
			
			customer_notes: {
               bsonType: "string"
             },
             
             payment: {
               bsonType: "string"
             }
  
         }
      }
   }
})
	
					
			}
	,
		createOrderDetailsModel: function (req, res, db) {
			
				db.createCollection("orderdetails", {
   validator: {
      $jsonSchema: {
         bsonType: "object",
         properties: {
            order_id: {
               bsonType: "string"
             },
             
             create_at: {
               bsonType: "date"
             },
             
             update_at: {
               bsonType: "date"
             },
             
             buyer_email: {
               bsonType: "string"
             },
             
             seller_email: {
               bsonType: "string"
             },
             
             sku: {
               bsonType: "string"
             },
             
             product_id: {
               bsonType: "int"
             },
             
             product_name: {
               bsonType: "string"
             },
             
             qty: {
               bsonType: "int"
             },
             
             price: {
              bsonType: "string"
             },
             
             totalamount: {
              bsonType: "int"

             },
             
             shipping_address: {
               bsonType: "string"
             },
             
             image: {
               bsonType: "string"
             },
             
             discount: {
               bsonType: "int"
             },
             
             discount_percentage: {
                bsonType: "int"
             }
  
         }
      }
   }
})
	
					
			}
	
	}

module.exports.orderModel = OrderModel;
