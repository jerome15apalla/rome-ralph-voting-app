@extends('layout.homeLayout')

@section('content')
    <div class="container">
        <p class='display-5 mb-0 mt-3 text-white'>Voters Election Statistics</p>
        <p class='text-white'>Accessible to all Registered Voters</p>
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card border-dark">
                <div class="card-header bg-dark text-light">
                    Percentage of voters who have already voted
                </div>
                <div class="card-body">
                    <div class="progress m-2 rounded-pill" style="height: 20px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h5 class="card-title pt-2">
                    75% of voters
                    </h5>   
                    <p class="card-text">Amounting to a total voters of total who have voted.</p>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-12 col-md-6">
            <div class="card border-dark">
                <div class="card-header text-light bg-dark">
                    Percentage distribution of votes among the presidential candidates.
                </div>
                <div class="card-body">
                    <h3 class="card-title m-0">President</h3>
                    <p class="card-text">Tallying of total votes for President</p>
                    <hr>
                    <p class="card-text m-0"> 1. Abella, Ernie</p>
                    <div class="progress m-2 rounded-pill" style="height: 20px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">1%</div>
                    </div>
                    <p class="card-text m-0"> 2. De Guzman, Leody</p>
                    <div class="progress m-2 rounded-pill" style="height: 20px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">1%</div>
                    </div>
                    <p class="card-text m-0"> 3. Domagoso, Isko Moreno</p>
                    <div class="progress m-2 rounded-pill" style="height: 20px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100">4%</div>
                    </div>
                    <p class="card-text m-0"> 4. Gonzales, Noberto</p>
                    <div class="progress m-2 rounded-pill" style="height: 20px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">1%</div>
                    </div>
                    <p class="card-text m-0"> 5. Lacson, Ping</p>
                    <div class="progress m-2 rounded-pill" style="height: 20px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 2%;" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100">2%</div>
                    </div>
                    <p class="card-text m-0"> 6. Mangondato, Faisal</p>
                    <div class="progress m-2 rounded-pill" style="height: 20px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 1%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">1%</div>
                    </div>
                    <p class="card-text m-0"> 7. Marcos, Bongbong</p>
                    <div class="progress m-2 rounded-pill" style="height: 20px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 58%;" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">58%</div>
                    </div>
                    <p class="card-text m-0"> 8. Montemayor, Jose Jr.</p>
                    <div class="progress m-2 rounded-pill" style="height: 20px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">1%</div>
                    </div>
                    <p class="card-text m-0"> 9. Pacquiao, Manny</p>
                    <div class="progress m-2 rounded-pill" style="height: 20px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 7%;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100">7%</div>
                    </div>
                    <p class="card-text m-0"> 10. Robredo, Leni</p>
                    <div class="progress m-2 rounded-pill" style="height: 20px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100">28%</div>
                    </div>
                    <br>
                </div>
            </div>
            </div>
            <div class="col-12 col-md-6">
            <div class="card border-dark pb-1">
                <div class="card-header text-light bg-dark">
                    Percentage distribution of votes among the vice presidential candidates.
                </div>
                <div class="card-body">
                    <h3 class="card-title">Vice President</h3>
                    <p class="card-text">Tallying of total votes for Vice President</p>
                    <hr>
                    <p class="card-text m-0"> 1. Atienza, Lito</p>
                    <div class="progress m-2 rounded-pill" style="height: 20px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">1%</div>
                    </div>
                    <p class="card-text m-0"> 2. Bello, Walden</p>
                    <div class="progress m-2 rounded-pill" style="height: 20px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">1%</div>
                    </div>
                    <p class="card-text m-0"> 3. David, Rizalito</p>
                    <div class="progress m-2 rounded-pill" style="height: 20px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">1%</div>
                    </div>
                    <p class="card-text m-0"> 4. Duterte, Sara</p>
                    <div class="progress m-2 rounded-pill" style="height: 20px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100">61%</div>
                    </div>
                    <p class="card-text m-0"> 5. Lopez, Manny SD</p>
                    <div class="progress m-2 rounded-pill" style="height: 20px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">1%</div>
                    </div>
                    <p class="card-text m-0"> 6. Ong, Doc Willie</p>
                    <div class="progress m-2 rounded-pill" style="height: 20px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100">4%</div>
                    </div>
                    <p class="card-text m-0"> 7. Pangilinan, Kiko</p>
                    <div class="progress m-2 rounded-pill" style="height: 20px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 18%;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">18%</div>
                    </div>
                    <p class="card-text m-0"> 8. Serapio, Carlos</p>
                    <div class="progress m-2 rounded-pill" style="height: 20px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">1%</div>
                    </div>
                    <p class="card-text m-0"> 9. Sotto, Vicente</p>
                    <div class="progress m-2 rounded-pill" style="height: 20px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 16%;" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100">16%</div>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
            </div>
            <div class="col-12">
            <div class="card border-dark mt-3">
                <div class="card-header text-light bg-dark">
                    Percentage distribution of votes among the senatorial candidates.
                </div>
                <div class="card-body">
                    <h3 class="card-title">Senators</h3>
                    <p class="card-text">Tallying of total votes for Senators</p>
                    <hr>
                    <p class="card-text m-0"> 1. Afuang, Abner</p>
                    <p class="card-text m-0"> 2. Albani, Ibrahim</p>
                    <p class="card-text m-0"> 3. Arranza, Jesus</p>
                    <p class="card-text m-0"> 4. Baguilat, Teddy</p>
                    <p class="card-text m-0"> 5. Bailen, Agnes</p>
                    <p class="card-text m-0"> 6. Balita, Carl</p>
                    <p class="card-text m-0"> 7. Barbo, Lutgaro</p>
                    <p class="card-text m-0"> 8. Bautista, Herbert</p>
                    <p class="card-text m-0"> 9. Belgica, Grego</p>
                    <p class="card-text m-0"> 10. Bello, Silvestre Jr.</p>
                    <p class="card-text m-0"> 11. Binay, Jejomar</p>
                    <p class="card-text m-0"> 12. Cabonegro, Roy</p>
                    <p class="card-text m-0"> 13. Castriciones, John</p>
                    <p class="card-text m-0"> 14. Cayetano, Alan Peter</p>
                    <p class="card-text m-0"> 15. Chavez, Melchor</p>
                    <p class="card-text m-0"> 16. Colmenares, Neri</p>
                    <p class="card-text m-0"> 17. D'Angelo, David</p>
                    <p class="card-text m-0"> 18. De Lima, Leila</p>
                    <p class="card-text m-0"> 19. Del Rosario, Monsour</p>
                    <p class="card-text m-0"> 20. Diaz, Fernando</p>
                    <p class="card-text m-0"> 21. Diokno, Chel</p>
                    <p class="card-text m-0"> 22. Ejercito, JV</p>
                    <p class="card-text m-0"> 23. Eleazar, Guillermo</p>
                    <p class="card-text m-0"> 24. Ereño, Ernie</p>
                    <p class="card-text m-0"> 25. Escudero, Francis</p>
                    <p class="card-text m-0"> 26. Espiritu, Luke</p>
                    <p class="card-text m-0"> 27. Estrada, Jinggoy</p>
                    <p class="card-text m-0"> 28. Falcone, Baldomero</p>
                    <p class="card-text m-0"> 29. Gadon, Larry</p>
                    <p class="card-text m-0"> 30. Gatchalian, Win</p>
                    <p class="card-text m-0"> 31. Gordon, Dick</p>
                    <p class="card-text m-0"> 32. Gutoc, Samira</p>
                    <p class="card-text m-0"> 33. Honasan, Gregorio</p>
                    <p class="card-text m-0"> 34. Hontiveros, Risa</p>
                    <p class="card-text m-0"> 35. Javellana, RJ</p>
                    <p class="card-text m-0"> 36. Kiram, Nur-Mahal</p>
                    <p class="card-text m-0"> 37. Labog, Elmer</p>
                    <p class="card-text m-0"> 38. Lacson, Alex</p>
                    <p class="card-text m-0"> 39. Langit, Rey</p>
                    <p class="card-text m-0"> 40. Legarda, Loren</p>
                    <p class="card-text m-0"> 41. Lim, Ariel</p>
                    <p class="card-text m-0"> 42. Mallilin, Emily</p>
                    <p class="card-text m-0"> 43. Marcos, Francis Leo</p>
                    <p class="card-text m-0"> 44. Matula, Sonny</p>
                    <p class="card-text m-0"> 45. Mindalano-Adam, Marieta</p>
                    <p class="card-text m-0"> 46. Olarte, Leo</p>
                    <p class="card-text m-0"> 47. Padilla, Manguita</p>
                    <p class="card-text m-0"> 48. Padilla, Robin</p>
                    <p class="card-text m-0"> 49. Panelo, Salvador</p>
                    <p class="card-text m-0"> 50. Pimentel-Naik, Astravel</p>
                    <p class="card-text m-0"> 51. Piñol, Emmanuel</p>
                    <p class="card-text m-0"> 52. Ricablanca, Willie Jr.</p>
                    <p class="card-text m-0"> 53. Roque, Harry</p>
                    <p class="card-text m-0"> 54. Sahidula, Nur-Ana</p>
                    <p class="card-text m-0"> 55. Sison, Jopet</p>
                    <p class="card-text m-0"> 56. Teodoro, Gilberto</p>
                    <p class="card-text m-0"> 57. Trillanes, Antonio</p>
                    <p class="card-text m-0"> 58. Tulfo, Raffy</p>
                    <p class="card-text m-0"> 59. Valeros, Rey</p>
                    <p class="card-text m-0"> 60. Villanueva Joel</p>
                    <p class="card-text m-0"> 61. Villar, Mark</p>
                    <p class="card-text m-0"> 62. Zubiaga, Carmen</p>
                    <p class="card-text m-0"> 63. Zubiri, Juan Miguel</p>
                </div>
            </div>
            </div>
        </div>
        <br>
    </div>
@endsection

