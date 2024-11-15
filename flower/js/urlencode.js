function urlencode(str) {
   var v;
   try { v = encodeURIComponent(str); } catch (e) { v = escape(str); }
   return v.replace(/%20/g,"+");
}