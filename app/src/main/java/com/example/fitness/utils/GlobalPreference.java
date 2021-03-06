package com.example.fitness.utils;

import android.content.Context;
import android.content.SharedPreferences;

public class GlobalPreference {

    private SharedPreferences mSharedPreferences;
    private Context mContext;
    private SharedPreferences.Editor mEditor;

    public GlobalPreference(Context mContext) {
        this.mContext = mContext;
        mSharedPreferences = mContext.getSharedPreferences(Constants.SHARED_PREF, Context.MODE_PRIVATE);
        mEditor = mSharedPreferences.edit();
    }

    public void addIp(String ip) {
        mEditor.putString(Constants.IP, ip);
        mEditor.apply();
    }

    public void saveCredentials(String emailAddress) {
        mEditor.putString(Constants.EMAIL_ADDRESS,emailAddress);
        mEditor.apply();
    }

    public void setLoginStatus(Boolean value){
        mEditor.putBoolean(Constants.LOGIN_CHECK,value);
        mEditor.apply();
    }
    public boolean getLoginStatus(){
     return  mSharedPreferences.getBoolean(Constants.LOGIN_CHECK,false);
    }


    public String getEmailAddress() {
        return mSharedPreferences.getString(Constants.EMAIL_ADDRESS, "");
    }



    public String RetrieveIp() {
        return mSharedPreferences.getString(Constants.IP, "");
    }

}
