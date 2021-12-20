package com.example.fitness;

import android.content.BroadcastReceiver;
import android.content.Context;
import android.content.Intent;
import android.content.IntentFilter;
import android.os.Bundle;

import com.example.fitness.utils.GlobalPreference;

import android.telephony.SmsManager;
import android.util.Log;
import android.view.View;

import com.example.fitness.utils.GpsTrackers;
import com.example.fitness.utils.ShakeService;

import androidx.core.view.GravityCompat;
import androidx.drawerlayout.widget.DrawerLayout;
import androidx.appcompat.app.AppCompatActivity;
import androidx.appcompat.widget.Toolbar;
import androidx.localbroadcastmanager.content.LocalBroadcastManager;

import android.widget.Toast;

public class HomeActivity extends AppCompatActivity{

    private GlobalPreference mGlobalPreference;
    private ApiInterface mApiInterface;
    public static final String TAG = HomeActivity.class.getSimpleName();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);
        Toolbar toolbar = findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);

    }

    public void Logout(View view){
        mGlobalPreference.setLoginStatus(false);
        startActivity(new Intent(HomeActivity.this, LoginActivity.class));
    }



    public void Timer(View view){

    }


    public void Help(View view) {
        Log.d(TAG, "Help: ");

    }


    @Override
    protected void onResume() {
        super.onResume();

    }

    @Override
    protected void onPause() {
        super.onPause();

    }


    @Override
    protected void onDestroy() {
        // Unregister since the activity is about to be closed.
        super.onDestroy();
    }


    @Override
    public void onBackPressed() {
        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        if (drawer.isDrawerOpen(GravityCompat.START)) {
            drawer.closeDrawer(GravityCompat.START);
        } else {
            super.onBackPressed();
        }
    }

}
