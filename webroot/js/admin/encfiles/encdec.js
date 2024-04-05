        function encrypt(msg){
           

            var key = "6Le0DgMTAAAAANokdEEial"; 
            var iv = "mHGFxENnZLbienLyANoi.e"; 
            key = CryptoJS.enc.Base64.parse(key);
            iv = CryptoJS.enc.Base64.parse(iv);
            return btoa(CryptoJS.AES.encrypt(msg, key, { iv: iv }));
         
        }
        