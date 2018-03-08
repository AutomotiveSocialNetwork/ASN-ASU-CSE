package com.example.a.myapplication;

import android.content.Intent;
import android.graphics.drawable.AnimationDrawable;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;

public class MainActivity extends AppCompatActivity {

    public Button btn1;
    public Button btn2;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

    }

    public void btn1_onClick(View view){
        btn1 = (Button)findViewById(R.id.sign_in);
        btn1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent int1 = new Intent(MainActivity.this,SignIn.class);
                startActivity(int1);
            }
        });
    }

    public void btn2_onClick(View view){
        btn2 = (Button)findViewById(R.id.sign_up);
        btn2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent int1 = new Intent(MainActivity.this,SignUP2.class);
                startActivity(int1);
            }
        });
    }
}
