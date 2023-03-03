@extends('layout.homeLayout')

@section('content')
<div class="container">
    <p class='display-5 mb-0 mt-3 ms-4 text-light'>Online Voting System</p>
    <h4 class="ms-4 text-light">2022 Philippine National Election</h4>
    <br>
    <div>
        <form action="{{route('finished')}}" method="POST">
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf
            <div class="card shadow ms-3 me-3 border-dark">
                <div class="card-header text-center text-light bg-dark">
                    Presidential Candidates
                </div>
                <div class="card-body ps-5 pb-4">
                    <h5 class="card-title m-0">Vote for 1</h5>
                    <p class="card-text">Choose the candidate you want to vote as the President</p>
                    <span class="text-danger">@error('president') You must choose atleast 1 President <br><br> @enderror</span>
                    <input type="radio" name="president" value="p1"/> 1. Abella, Ernie
                    <br>
                    <input type="radio" name="president" value="p2"/> 2. De Guzman, Leody
                    <br>
                    <input type="radio" name="president" value="p3"/> 3. Domagoso, Isko Moreno
                    <br>
                    <input type="radio" name="president" value="p4"/> 4. Gonzales, Noberto
                    <br>
                    <input type="radio" name="president" value="p5"/> 5. Lacson, Ping
                    <br>
                    <input type="radio" name="president" value="p6"/> 6. Mangondato, Faisal
                    <br>
                    <input type="radio" name="president" value="p7"/> 7. Marcos, Bongbong
                    <br>
                    <input type="radio" name="president" value="p8"/> 8. Montemayor, Jose Jr.
                    <br>
                    <input type="radio" name="president" value="p9"/> 9. Pacquiao, Manny
                    <br>
                    <input type="radio" name="president" value="p10"/> 10. Robredo, Leni
                    <br>
                    
                </div>
            </div>
            <br>
            <div class="card shadow ms-3 me-3 border-dark">
                <div class="card-header text-center bg-dark text-light">
                    Vice Presidential Candidates
                </div>
                <div class="card-body ps-5 pb-4">
                    <h5 class="card-title m-0">Vote for 1</h5>
                    <p class="card-text">Choose the candidate you want to vote as the Vice President</p>
                    <span class="text-danger">@error('vice_president') You must choose atleast 1 Vice President <br><br> @enderror</span>
                    <input type="radio" name="vice_president" value="vp1"/> 1. Atienza, Lito
                    <br>
                    <input type="radio" name="vice_president" value="vp2"/> 2. Bello, Walden
                    <br>
                    <input type="radio" name="vice_president" value="vp3"/> 3. David, Rizalito
                    <br>
                    <input type="radio" name="vice_president" value="vp4"/> 4. Duterte, Sara
                    <br>
                    <input type="radio" name="vice_president" value="vp5"/> 5. Lopez, Manny SD
                    <br>
                    <input type="radio" name="vice_president" value="vp6"/> 6. Ong, Doc Willie
                    <br>
                    <input type="radio" name="vice_president" value="vp7"/> 7. Pangilinan, Kiko
                    <br>
                    <input type="radio" name="vice_president" value="vp8"/> 8. Serapio, Carlos
                    <br>
                    <input type="radio" name="vice_president" value="vp9"/> 9. Sotto, Vicente
                    <br>
                    
                </div>
            </div>
            <br>
            <div class="card shadow ms-3 me-3 border-dark">
                <div class="card-header text-center text-white bg-dark">
                    Senatorial Candidates
                </div>
                <div class="card-body ps-5 pb-4">
                    <h5 class="card-title m-0">Vote for 12</h5>
                    <p class="card-text m-0">Choose 12 candidates that you want to vote as a Senator</p>
                    <p class="card-text mt-0 mb-3">If your total vote for senators exceed 12, your vote for senators will be invalid and will not be counted</p>
                    <span class="text-danger">@error('senator') Total Votes for Senators must be atleast 12 Senators @enderror</span>
                    <div class="container">
                    <div class="row pt-3 pb-3">
                    <div class="col-12 col-md-6 col-lg-4">
                        <input type="checkbox" name="senator[]" value="s1"/> 1. Afuang, Abner
                        <br>
                        <input type="checkbox" name="senator[]" value="s2"/> 2. Albani, Ibrahim
                        <br>
                        <input type="checkbox" name="senator[]" value="s3"/> 3. Arranza, Jesus
                        <br>
                        <input type="checkbox" name="senator[]" value="s4"/> 4. Baguilat, Teddy
                        <br>
                        <input type="checkbox" name="senator[]" value="s5"/> 5. Bailen, Agnes
                        <br>
                        <input type="checkbox" name="senator[]" value="s6"/> 6. Balita, Carl
                        <br>
                        <input type="checkbox" name="senator[]" value="s7"/> 7. Barbo, Lutgaro
                        <br>
                        <input type="checkbox" name="senator[]" value="s8"/> 8. Bautista, Herbert
                        <br>
                        <input type="checkbox" name="senator[]" value="s9"/> 9. Belgica, Grego
                        <br>
                        <input type="checkbox" name="senator[]" value="s10"/> 10. Bello, Silvestre Jr.
                        <br>
                        <input type="checkbox" name="senator[]" value="s11"/> 11. Binay, Jejomar
                        <br>
                        <input type="checkbox" name="senator[]" value="s12"/> 12. Cabonegro, Roy
                        <br>
                        <input type="checkbox" name="senator[]" value="s13"/> 13. Castriciones, John
                        <br>
                        <input type="checkbox" name="senator[]" value="s14"/> 14. Cayetano, Alan Peter
                        <br>
                        <input type="checkbox" name="senator[]" value="s15"/> 15. Chavez, Melchor
                        <br>
                        <input type="checkbox" name="senator[]" value="s16"/> 16. Colmenares, Neri
                        <br>
                        <input type="checkbox" name="senator[]" value="s17"/> 17. D'Angelo, David
                        <br>
                        <input type="checkbox" name="senator[]" value="s18"/> 18. De Lima, Leila
                        <br>
                        <input type="checkbox" name="senator[]" value="s19"/> 19. Del Rosario, Monsour
                        <br>
                        <input type="checkbox" name="senator[]" value="s20"/> 20. Diaz, Fernando
                        <br>
                        <input type="checkbox" name="senator[]" value="s21"/> 21. Diokno, Chel
                        <br>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <input type="checkbox" name="senator[]" value="s22"/> 22. Ejercito, JV
                        <br>
                        <input type="checkbox" name="senator[]" value="s23"/> 23. Eleazar, Guillermo
                        <br>
                        <input type="checkbox" name="senator[]" value="s24"/> 24. Ereño, Ernie
                        <br>
                        <input type="checkbox" name="senator[]" value="s25"/> 25. Escudero, Francis
                        <br>
                        <input type="checkbox" name="senator[]" value="s26"/> 26. Espiritu, Luke
                        <br>
                        <input type="checkbox" name="senator[]" value="s27"/> 27. Estrada, Jinggoy
                        <br>
                        <input type="checkbox" name="senator[]" value="s28"/> 28. Falcone, Baldomero
                        <br>
                        <input type="checkbox" name="senator[]" value="s29"/> 29. Gadon, Larry
                        <br>
                        <input type="checkbox" name="senator[]" value="s30"/> 30. Gatchalian, Win
                        <br>
                        <input type="checkbox" name="senator[]" value="s31"/> 31. Gordon, Dick
                        <br>
                        <input type="checkbox" name="senator[]" value="s32"/> 32. Gutoc, Samira
                        <br>
                        <input type="checkbox" name="senator[]" value="s33"/> 33. Honasan, Gregorio
                        <br>
                        <input type="checkbox" name="senator[]" value="s34"/> 34. Hontiveros, Risa
                        <br>
                        <input type="checkbox" name="senator[]" value="s35"/> 35. Javellana, RJ
                        <br>
                        <input type="checkbox" name="senator[]" value="s36"/> 36. Kiram, Nur-Mahal
                        <br>
                        <input type="checkbox" name="senator[]" value="s37"/> 37. Labog, Elmer
                        <br>
                        <input type="checkbox" name="senator[]" value="s38"/> 38. Lacson, Alex
                        <br>
                        <input type="checkbox" name="senator[]" value="s39"/> 39. Langit, Rey
                        <br>
                        <input type="checkbox" name="senator[]" value="s40"/> 40. Legarda, Loren
                        <br>
                        <input type="checkbox" name="senator[]" value="s41"/> 41. Lim, Ariel
                        <br>
                        <input type="checkbox" name="senator[]" value="s42"/> 42. Mallilin, Emily
                        <br>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <input type="checkbox" name="senator[]" value="s43"/> 43. Marcos, Francis Leo
                        <br>
                        <input type="checkbox" name="senator[]" value="s44"/> 44. Matula, Sonny
                        <br>
                        <input type="checkbox" name="senator[]" value="s45"/> 45. Mindalano-Adam, Marieta
                        <br>
                        <input type="checkbox" name="senator[]" value="s46"/> 46. Olarte, Leo
                        <br>
                        <input type="checkbox" name="senator[]" value="s47"/> 47. Padilla, Manguita
                        <br>
                        <input type="checkbox" name="senator[]" value="s48"/> 48. Padilla, Robin
                        <br>
                        <input type="checkbox" name="senator[]" value="s49"/> 49. Panelo, Salvador
                        <br>
                        <input type="checkbox" name="senator[]" value="s50"/> 50. Pimentel-Naik, Astravel
                        <br>
                        <input type="checkbox" name="senator[]" value="s51"/> 51. Piñol, Emmanuel
                        <br>
                        <input type="checkbox" name="senator[]" value="s52"/> 52. Ricablanca, Willie Jr.
                        <br>
                        <input type="checkbox" name="senator[]" value="s53"/> 53. Roque, Harry
                        <br>
                        <input type="checkbox" name="senator[]" value="s54"/> 54. Sahidula, Nur-Ana
                        <br>
                        <input type="checkbox" name="senator[]" value="s55"/> 55. Sison, Jopet
                        <br>
                        <input type="checkbox" name="senator[]" value="s56"/> 56. Teodoro, Gilberto
                        <br>
                        <input type="checkbox" name="senator[]" value="s57"/> 57. Trillanes, Antonio
                        <br>
                        <input type="checkbox" name="senator[]" value="s58"/> 58. Tulfo, Raffy
                        <br>
                        <input type="checkbox" name="senator[]" value="s59"/> 59. Valeros, Rey
                        <br>
                        <input type="checkbox" name="senator[]" value="s60"/> 60. Villanueva Joel
                        <br>
                        <input type="checkbox" name="senator[]" value="s61"/> 61. Villar, Mark
                        <br>
                        <input type="checkbox" name="senator[]" value="s62"/> 62. Zubiaga, Carmen
                        <br>
                        <input type="checkbox" name="senator[]" value="s63"/> 63. Zubiri, Juan Miguel
                        <br>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <center>
                <button class="btn btn-info border-dark position-sticky m-0 pt-3 pb-3 ps-5 pe-5" type="submit">Vote</button>
            </center>
        </form>
    </div>    
</div>
@endsection