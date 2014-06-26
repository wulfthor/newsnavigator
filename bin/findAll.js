cursor = db.stories.find({},{'body':0});
while ( cursor.hasNext() ) {
   printjson( cursor.next() );
}
