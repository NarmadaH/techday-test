/**
 * Created by Achini on 10/31/2016.
 */

function searchEmployee() {
    var obj;
    var username=document.getElementById('username').value;
    alert(username);

    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        obj = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Browser Doesn't Support AJAX!");
    }

    if (obj !== null) {
        obj.onreadystatechange = function () {
            if (obj.readyState < 4) {
                // progress
            } else if (obj.readyState === 4) {
                var res = obj.responseText;
                var result = JSON.parse(res);
                alert(res);
                alert (result);

                if (result!=null){
                    alert ('not null');
                    var fullName = result[0].first_name+ " "+ result[0].last_name;
                    var desig = result[0].designation;
                    alert (fullName+ " "+ desig);

                    document.getElementById('full-name').value = fullName;
                    document.getElementById('designation').value = desig;

                    document.getElementById('pop-on-click').style.visibility='visible';
                } else{
                    alert ('Invalid Username! Please Renter');
                }
            }
        }

        var pass = "username=" + username;
        alert ('passing '+pass);
        obj.open("GET", "controller/registerController.php?" +pass, true);
        obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        obj.send();
    }

}

function entrance() {
    var obj;
    var username=document.getElementById('username').value;
    alert(username);

    if (window.XMLHttpRequest) {
        obj = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        obj = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Browser Doesn't Support AJAX!");
    }

    if (obj !== null) {
        obj.onreadystatechange = function () {
            if (obj.readyState < 4) {
                // progress
            } else if (obj.readyState === 4) {
                var res = obj.responseText;
                var result = JSON.parse(res);
            }
        }

        obj.open("GET", "controller/entranceController.php?", true);
        obj.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        obj.send();
    }


}
