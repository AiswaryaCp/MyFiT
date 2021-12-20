package com.example.fitness;

import androidx.appcompat.app.AppCompatActivity;

import android.annotation.SuppressLint;
import android.os.Bundle;
import android.os.StrictMode;
import android.text.TextUtils;
import android.widget.EditText;
import android.widget.ProgressBar;
import android.widget.Toast;

import com.example.fitness.model.Status;
import com.example.fitness.utils.GlobalPreference;
import com.google.gson.Gson;

import butterknife.BindView;
import butterknife.ButterKnife;
import butterknife.OnClick;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class SignUpActivity extends AppCompatActivity {

    GlobalPreference mGlobalPreference;

    private ApiInterface mApiInterface;

    private Gson gson;
    private static final String TAG = LoginActivity.class.getSimpleName();

    @BindView(R.id.emailRegEditText)
    EditText emailRegEditText;

    @BindView(R.id.numberRegEditText)
    EditText numberRegEditText;

    @BindView(R.id.nameRegEditText)
    EditText nameRegEditText;

    @BindView(R.id.heightRegEditText)
    EditText heightRegEditText;

    @BindView(R.id.weightRegEditText)
    EditText weightRegEditText;

    @BindView(R.id.ageRegEditText)
    EditText ageRegEditText;

    @BindView(R.id.passwordRegEditText)
    EditText passwordRegEditText;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_sign_up);
        ButterKnife.bind(this);
        init();

    }

    private void init() {
        mGlobalPreference = new GlobalPreference(this);
        gson = new Gson();
        StrictMode.ThreadPolicy policy = new StrictMode.ThreadPolicy.Builder().permitAll().build();
        StrictMode.setThreadPolicy(policy);

    }

    @SuppressLint("NonConstantResourceId")
    @OnClick(R.id.btn_registration_submit)
    public void submit() {

        String email = emailRegEditText.getText().toString();
        String number = numberRegEditText.getText().toString();
        String name = nameRegEditText.getText().toString();
        String height = heightRegEditText.getText().toString();
        String weight = weightRegEditText.getText().toString();
        String age = ageRegEditText.getText().toString();
        String password = passwordRegEditText.getText().toString();
        if (TextUtils.isEmpty(email) || TextUtils.isEmpty(number) || TextUtils.isEmpty(name) ||
                TextUtils.isEmpty(height) || TextUtils.isEmpty(weight) || TextUtils.isEmpty(age) ||
                TextUtils.isEmpty(password)
        ) {
            Toast.makeText(SignUpActivity.this, "Please fill the fields", Toast.LENGTH_SHORT).show();
        } else {
            mApiInterface = ApiClient.getRetrofit(mGlobalPreference.RetrieveIp()).create(ApiInterface.class);
            Call<Status> regBaseCall = mApiInterface.userRegistration(
                    email, name, number, height, weight, age, password);

            regBaseCall.enqueue(new Callback<Status>() {
                @Override
                public void onResponse(Call<Status> call, Response<Status> response) {
                    System.out.println("response"+response.body().getStatus());
                    if (response.isSuccessful()) {
                        if (response.body().getStatus().equals("true")) {
                            Toast.makeText(SignUpActivity.this, "Registration Successful", Toast.LENGTH_SHORT).show();
                            finish();
                        }
                    } else {
                        Toast.makeText(SignUpActivity.this, "Registration Failed", Toast.LENGTH_SHORT).show();

                    }
                }

                @Override
                public void onFailure(Call<Status> call, Throwable throwable) {
                    Toast.makeText(SignUpActivity.this, "Something went wrong"+throwable.toString(), Toast.LENGTH_SHORT).show();
                }
            });

        }


    }
}