#include <iostream>
using namespace std;

void konversi(int detik);

int main(){
	float jarak = 0;
	int waktu = 0, total_waktu = 0;
	int kecepatan_awal = 3;
	int kecepatan_berikutnya = 5;
	int kecepatan_konstan = 2;
	while(waktu<23*60){
		waktu = waktu + 1;
		jarak = jarak + 3;
	}
//	cout<<waktu/60<<endl;
//	cout<<jarak/1000<<endl;
	total_waktu = total_waktu+waktu;
	waktu = 0;
	while(waktu<12*60){
		waktu = waktu + 1;
		jarak = jarak + 5;
	}
//	cout<<waktu/60<<endl;
//	cout<<jarak/1000<<endl;
	total_waktu = total_waktu+waktu;
	waktu = 0;
	while(jarak<64500){
		waktu = waktu + 1;
		jarak = jarak + 2;
	}
//	cout<<waktu/60<<endl;
//	cout<<jarak/1000<<endl;
	total_waktu = total_waktu+waktu;
	cout<<"Total waktu yang diperukan Ismail dari rumah ke kantornya : "<<endl;
	konversi(total_waktu);
	
}

void konversi(int detik){
	int jam,menit;
	jam = detik /(60*60);
    detik = detik-((60*60)*jam);
    menit = detik / 60;
    detik = detik -(60*menit);
    cout<<" Jam : "<<jam<<endl;
    cout<<" Menit : "<<menit<<endl;
    cout<<" Detik : "<<detik;
}
