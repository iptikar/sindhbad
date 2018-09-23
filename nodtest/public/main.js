app.get('/', function(req, res, next){
  res.render('index');
});
// main.js
var update = document.getElementById('update')

update.addEventListener('click', function () {
  // Send PUT Request here
  
  app.put('/quotes', (req, res) => {
  db.collection('quotes')
  .findOneAndUpdate({name: 'Dick'}, {
    $set: {
      name: req.body.name,
      quote: req.body.quote
    }
  }, {
    sort: {_id: -1},
    upsert: true
  }, (err, result) => {
    if (err) return res.send(err)
    res.send(result)
  })
})


})
