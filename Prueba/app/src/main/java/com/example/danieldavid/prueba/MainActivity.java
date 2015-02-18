package com.example.danieldavid.prueba;

import android.content.Context;
import android.os.StrictMode;
import android.support.v7.app.ActionBarActivity;
import android.os.Bundle;
import android.text.Editable;
import android.util.Log;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import org.apache.http.NameValuePair;
import org.apache.http.message.BasicNameValuePair;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;


public class MainActivity extends ActionBarActivity {

    //Variables
    Button btn;
    EditText user;
    EditText pass;
    String username;
    String password;
    String returnString;
    boolean found;

    private void inicializacion() {
        btn = (Button) findViewById(R.id.button);
        user = (EditText) findViewById(R.id.username);
        pass = (EditText) findViewById(R.id.password);
    }


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        StrictMode.setThreadPolicy(new StrictMode.ThreadPolicy.Builder()
                .detectDiskReads().detectDiskWrites().detectNetwork() // StrictMode is most commonly used
                        //to catch accidental disk or network access on the application's main thread
                .penaltyLog().build());
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        inicializacion();

        btn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                username = user.getText().toString();
                password = pass.getText().toString();
                Log.i("username", username);
                Log.i("password", password);

                ArrayList<NameValuePair> postParameters = new ArrayList<NameValuePair>();

                // define the parameter
                postParameters.add(new BasicNameValuePair("user", username));
                postParameters.add(new BasicNameValuePair("pass", password));

                String response = null;

                try {
                    response = CustomHttpClient.executeHttpPost(
                            //"http://129.107.187.135/CSE5324/jsonscript.php", // your ip address if using localhost server
                            "http://proyectoaees.comxa.com/databasescript.php",  // in case of a remote server
                            postParameters);

                    // store the result returned by PHP script that runs MySQL query
                    String result = response.toString();

                    //parse json data
                    try {
                        returnString = "";
                        JSONArray jArray = new JSONArray(result);

                        for (int i = 0; i < jArray.length(); i++) {
                            JSONObject json_data = jArray.getJSONObject(i);
                            if (username.equals(json_data.getString("user")) && password.equals(json_data.getString("pass")))
                            {
                                Log.i("log_tag"," user: " + json_data.getString("user") +
                                        ",pass: " + json_data.getString("pass"));
                                found = true;


                            }


                            //Get an output to the screen
                            returnString += "\n" + json_data.getString("user") + " -> " + json_data.getString("pass");
                        }
                    } catch (JSONException e) {
                        Log.e("log_tag", "Error parsing data " + e.toString());
                    }
                }
                catch (Exception e) {
                    Log.e("log_tag","Error in http connection!!" + e.toString());
                }

                    if (found) {
                        CharSequence text = "Bienvenido Sr." + username;
                        int duration = Toast.LENGTH_SHORT;
                        Context context = getApplicationContext();

                        Toast toast = Toast.makeText(context, text, duration);
                        toast.show();
                    } else {
                        CharSequence text = "Error, Revise El username y/o el password";
                        int duration = Toast.LENGTH_SHORT;
                        Context context = getApplicationContext();

                        Toast toast = Toast.makeText(context, text, duration);
                        toast.show();
                    }
                }

        });

    }
}