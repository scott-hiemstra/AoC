<?php

/*
Calculate the distance between numbers in 2 lists


https://adventofcode.com/2024/day/1
*/

$firstList = [38450, 94765, 89694, 96083, 57068, 32031, 97652, 85752, 66117, 29274, 73274, 15357, 79851, 68766, 67087, 19642, 27123, 98928, 48657, 68163, 74320, 68369, 63293, 70014, 58505, 79235, 42118, 89553, 54588, 74947, 95994, 40886, 89808, 51059, 29828, 26337, 75448, 26971, 71808, 29493, 47055, 50770, 14156, 56759, 38923, 12572, 88675, 78193, 41580, 38011, 27994, 98468, 53338, 27553, 77017, 47383, 79266, 74356, 22139, 84119, 77267, 97361, 58958, 17232, 26441, 49244, 58905, 15329, 56453, 44121, 36651, 22517, 36899, 44144, 14168, 75698, 53259, 95206, 53817, 67800, 48808, 35316, 25220, 23135, 64270, 62121, 90797, 49815, 39585, 83592, 57529, 36396, 50313, 41827, 58012, 66853, 59067, 29841, 25699, 75721, 15845, 68449, 78811, 77447, 84481, 67243, 40596, 18530, 16485, 18820, 10705, 92870, 63712, 71445, 27313, 60286, 40149, 74223, 30240, 57108, 42911, 30976, 26657, 77509, 76095, 64592, 97195, 27060, 60414, 29255, 74160, 35318, 59140, 53239, 47530, 66911, 28261, 78688, 78682, 16916, 80432, 48514, 44320, 87488, 23810, 83225, 52412, 71961, 76949, 54333, 46121, 40001, 28005, 43356, 94967, 98138, 58625, 24459, 34147, 96300, 47061, 50297, 19355, 96284, 41466, 72578, 91238, 87100, 22792, 49305, 50026, 71866, 77297, 79510, 72670, 24090, 71170, 24188, 15286, 71137, 66672, 64757, 40097, 66347, 11349, 96456, 60810, 30775, 46875, 74042, 98242, 20464, 11216, 51584, 29479, 25274, 76193, 63580, 80770, 46436, 78670, 24606, 50913, 87427, 20527, 39190, 12482, 59815, 58857, 26313, 28707, 85620, 22793, 18901, 26137, 17778, 33813, 82136, 29410, 45844, 79750, 95419, 40640, 56250, 46252, 90620, 60057, 35869, 84211, 72937, 80322, 52793, 74580, 25536, 50585, 21269, 85698, 80071, 36306, 66725, 33487, 27786, 93519, 55574, 65632, 75140, 21376, 56970, 94632, 59040, 98256, 66819, 32205, 23862, 35302, 34357, 16783, 50804, 82254, 75852, 42052, 56085, 72548, 72709, 27187, 45506, 46995, 83699, 49924, 99855, 62856, 28739, 17311, 50379, 56636, 70872, 86900, 57857, 92352, 11595, 33278, 79985, 51838, 79422, 15836, 85535, 71491, 18081, 47876, 97371, 22201, 11364, 94451, 61063, 13448, 20391, 61615, 45636, 53957, 85177, 81213, 48248, 45113, 82427, 33323, 67505, 26670, 79620, 22783, 75102, 10610, 30914, 53004, 73145, 30678, 12762, 86499, 13832, 89930, 93980, 53089, 68341, 25812, 77380, 78760, 98000, 78359, 32489, 94527, 33226, 61775, 31168, 95196, 28708, 99934, 55576, 40679, 77996, 74121, 80739, 27324, 83292, 26406, 81713, 88520, 71675, 30129, 37014, 33970, 32494, 39139, 76214, 76953, 35040, 17949, 81520, 62508, 54572, 79509, 24891, 45794, 85379, 79782, 73528, 14064, 71965, 60533, 22163, 20833, 84152, 71152, 24562, 50251, 95527, 88201, 87781, 44210, 43999, 90557, 26041, 33246, 82762, 54561, 31699, 24806, 97294, 57582, 38956, 91638, 44169, 29835, 57045, 56421, 98128, 24605, 23870, 97003, 11739, 89513, 20925, 14761, 23754, 42102, 38734, 39825, 81566, 84612, 90484, 22889, 54768, 48764, 12481, 90546, 38087, 49010, 92728, 81313, 74535, 36939, 51987, 62840, 43761, 58282, 63257, 48410, 57997, 14800, 77328, 82570, 48271, 69127, 34386, 69197, 10827, 82708, 95057, 44966, 21933, 42772, 19232, 53262, 32302, 14637, 91419, 66541, 15810, 75596, 63247, 96073, 40948, 77261, 33418, 30512, 69148, 62854, 98389, 23120, 56653, 49957, 30593, 57670, 44904, 10003, 17583, 35032, 17608, 20288, 43214, 79347, 94845, 24989, 84669, 74014, 13045, 64782, 87683, 36451, 59285, 99210, 66649, 53952, 83188, 88672, 21214, 24393, 88027, 75510, 61965, 50081, 84120, 84090, 90580, 37942, 20157, 82710, 15745, 39765, 66955, 31533, 18316, 48785, 19970, 26109, 41210, 45968, 19444, 64435, 34213, 21211, 75654, 89852, 19610, 53810, 18740, 39042, 50333, 56479, 62955, 45736, 88746, 16507, 70514, 15217, 69123, 24278, 45495, 15905, 13582, 83066, 21087, 32035, 50502, 80402, 54701, 25184, 52595, 13794, 10548, 86251, 57065, 35617, 40607, 54492, 56644, 45679, 14251, 71806, 42346, 48325, 51980, 98014, 39611, 79247, 87735, 93919, 32619, 31659, 27614, 96264, 17373, 79122, 36904, 78239, 25085, 16451, 43848, 65380, 69891, 88097, 53472, 85315, 67185, 30926, 38001, 87330, 19192, 63847, 10483, 75527, 63424, 28256, 81540, 93018, 75634, 71643, 72464, 74651, 61692, 40829, 63414, 51580, 54813, 63005, 80646, 64628, 94761, 79054, 74941, 84955, 78409, 54178, 56533, 18900, 55216, 66854, 88094, 60806, 27368, 58081, 21266, 62229, 22785, 38447, 69547, 12256, 34249, 43430, 83343, 53434, 63321, 33819, 38690, 47509, 62269, 53247, 88548, 42667, 92265, 94540, 72984, 62111, 75974, 54383, 79046, 10383, 77274, 90101, 90466, 56335, 34056, 65220, 30577, 85922, 88914, 59974, 59682, 42802, 93454, 51073, 66264, 39483, 88565, 96306, 50883, 26523, 38219, 19402, 63482, 97055, 66216, 79952, 69328, 41244, 83424, 10589, 88514, 53046, 37352, 34421, 67039, 37162, 74312, 38740, 69471, 32289, 72562, 37081, 31329, 31243, 62461, 96473, 25279, 10072, 47497, 49427, 10605, 91095, 58414, 82370, 57378, 24485, 13809, 76442, 64387, 57400, 29253, 63306, 23098, 62865, 87758, 32587, 45399, 41893, 56666, 35264, 52577, 51123, 62388, 66812, 21600, 74599, 72802, 84800, 72787, 53794, 33247, 52978, 66156, 91181, 48551, 95712, 25556, 84885, 53327, 33532, 19286, 89021, 10498, 61704, 46537, 36143, 76654, 57004, 85959, 77137, 52952, 51984, 30028, 84410, 37142, 77446, 55877, 67259, 99289, 85489, 31363, 96633, 81214, 87281, 44440, 63470, 42955, 94662, 14746, 20227, 69042, 13060, 43581, 65247, 96862, 39871, 19865, 13117, 60881, 85892, 41497, 16212, 25806, 98783, 84964, 64895, 49132, 64979, 17208, 77114, 47287, 67657, 99439, 41719, 79716, 60986, 93689, 41660, 31113, 15586, 93371, 97330, 14879, 20385, 51055, 76346, 70253, 63415, 95865, 86466, 14242, 54002, 70433, 91588, 37217, 71912, 15879, 42596, 90613, 69816, 82985, 13592, 90849, 33383, 97097, 29779, 19760, 93199, 35188, 38680, 75459, 19065, 35183, 92715, 83060, 77412, 97799, 32652, 94958, 72526, 16026, 80913, 41578, 58877, 37030, 68147, 56044, 23335, 42998, 80307, 77512, 54090, 88343, 15894, 62706, 35842, 95072, 52930, 75602, 78117, 65532, 75020, 46455, 62850, 81095, 31291, 27407, 94752, 92700, 84447, 92801, 29143, 21884, 62375, 19197, 54156, 78873, 38246, 72027, 91571, 53847, 81973, 13732, 38452, 31228, 71135, 21688, 30221, 31781, 31625, 53131, 50753, 49089, 49710, 48564, 29574, 84072, 90715, 87964, 73204, 78502, 87303, 31906, 74740, 22098, 53867, 67350, 91135, 53468, 30141, 74308, 69043, 88017, 17584, 32718, 12671, 69879, 59025, 52386, 61922, 89685, 95571, 86480, 78702, 29611, 92687, 66461, 18818, 64227, 56273, 10266, 85568, 41702, 52256, 20344, 15045, 36323, 86451, 62028, 72924, 95405, 83618, 36923, 74576, 60074, 58127, 94366, 79964, 20371, 57111, 56351, 53511, 69850, 48511, 11488, 23957, 10798, 78424, 70436, 82584, 27795, 25243, 85087, 20537, 60038, 26860, 29565, 11527, 38566, 33662, 30355, 98463, 61272, 11703, 71287, 47090, 84127, 26416, 17988, 84605, 64060, 17587, 56912, 47325, 25425, 77940, 82115, 18915, 53122, 92038, 90088, 40983, 64234, 39122, 53727, 75297, 51556, 71953, 83078, 65563, 53145, 36795, 91362, 47701, 33374, 15572, 96537, 69457, 62097, 62543, 23906, 57479, 37900, 25566, 22377];
$secondList = [56790, 36795, 26251, 99006, 30577, 60133, 26657, 40654, 44144, 30512, 84130, 56848, 19968, 87545, 66672, 37292, 85780, 19402, 36964, 68163, 70436, 93818, 10589, 13744, 92715, 72633, 84297, 49028, 42667, 89737, 68163, 27795, 48152, 71866, 47181, 92715, 87890, 12395, 80599, 61319, 43873, 96410, 68842, 54054, 26343, 34357, 40823, 39871, 42667, 85234, 39871, 21775, 68111, 35842, 80913, 93294, 78275, 77328, 87671, 39187, 66964, 23225, 10638, 96076, 75500, 64695, 39871, 69637, 42667, 36077, 39871, 45430, 71230, 88757, 30512, 26657, 91167, 30577, 34357, 77328, 99593, 55943, 54492, 34357, 19402, 77328, 94795, 92715, 72810, 69042, 54279, 35842, 11918, 94458, 42667, 95424, 66672, 34357, 99289, 58905, 86480, 65563, 40412, 45365, 68163, 48342, 78376, 55403, 30577, 80617, 26657, 32227, 26657, 71866, 80913, 56912, 29131, 86480, 44070, 76095, 44144, 76095, 17110, 36380, 30914, 94578, 95571, 16139, 85294, 45894, 47530, 59173, 95571, 25992, 46078, 59604, 27795, 83703, 77328, 56912, 82570, 62025, 98398, 71139, 68163, 55084, 22240, 76095, 65702, 37419, 12587, 30512, 46617, 27795, 62701, 69042, 35550, 52266, 25961, 21588, 77328, 71866, 68163, 40450, 84017, 24354, 20765, 92715, 71767, 82403, 95295, 13340, 93959, 63708, 94771, 39871, 58905, 45664, 68163, 81703, 19402, 39871, 34357, 39871, 91362, 92715, 46298, 24294, 87235, 87418, 91925, 35280, 92533, 19789, 22783, 27795, 57068, 95571, 92715, 33662, 94935, 36795, 34357, 96279, 69042, 35842, 77261, 99289, 47887, 84479, 18124, 34357, 80913, 61965, 68163, 39871, 31786, 69042, 27795, 80913, 58401, 20872, 51108, 95571, 26508, 39871, 62139, 56912, 63802, 46436, 21794, 34357, 35842, 69042, 59650, 65327, 39220, 46392, 14161, 67333, 27165, 47530, 22622, 97473, 81795, 25442, 42667, 39871, 77261, 13889, 96213, 17432, 67735, 91732, 39112, 30512, 44692, 86480, 80253, 39978, 79753, 56912, 78082, 94294, 31138, 58568, 80913, 72574, 70436, 66672, 56084, 36148, 34650, 51376, 90184, 74758, 42527, 39871, 70111, 26657, 38217, 19402, 96864, 91362, 25261, 71866, 86480, 97179, 47308, 88031, 74539, 17756, 72603, 86480, 28943, 59145, 37956, 30577, 58947, 30914, 56912, 14944, 39688, 85733, 29457, 47530, 69416, 70436, 30577, 65563, 86480, 42631, 95284, 88017, 30577, 99289, 22109, 91362, 62592, 86977, 59415, 33662, 61965, 22827, 10051, 91362, 96086, 77261, 38980, 35842, 30926, 54492, 60512, 21619, 95865, 15173, 96922, 92715, 27578, 39841, 91362, 84113, 76095, 61946, 26657, 89157, 86760, 56814, 68326, 79036, 22783, 69081, 95865, 66371, 55561, 35842, 89829, 35842, 19402, 66672, 66672, 91362, 80913, 66298, 69042, 28826, 39871, 80913, 71986, 30577, 37179, 71476, 30577, 77590, 56912, 91109, 92715, 92715, 44144, 70436, 13019, 17806, 26657, 77328, 48798, 26657, 97051, 68163, 65213, 80913, 92715, 93451, 21138, 69042, 36264, 63516, 64704, 83574, 80913, 61438, 90325, 33662, 22783, 40082, 56912, 30512, 30512, 22783, 22783, 77328, 81529, 95865, 90454, 68163, 30914, 74197, 23403, 16503, 68163, 42762, 71866, 33662, 92715, 33662, 92487, 81716, 82109, 76473, 30926, 14229, 30577, 35842, 95571, 57032, 65563, 13049, 33377, 22783, 56789, 98930, 76095, 38996, 41139, 86478, 86480, 51561, 83362, 47395, 22783, 35040, 57068, 17716, 86480, 87719, 35014, 30926, 33590, 81140, 58356, 17708, 69077, 30926, 59688, 22783, 80913, 23816, 82570, 88279, 79311, 35842, 63095, 67448, 98215, 27795, 77328, 22783, 68163, 85570, 94373, 30914, 80913, 34357, 45650, 44144, 19402, 66672, 70374, 56521, 59608, 24816, 49853, 28974, 45203, 27378, 62252, 80913, 29190, 68163, 95577, 46335, 11243, 33662, 70173, 85121, 19402, 37680, 46680, 61965, 19671, 65563, 55220, 77328, 34368, 93310, 70436, 14352, 98509, 36393, 62875, 68163, 14233, 57068, 33242, 59998, 30914, 34707, 83611, 54081, 65927, 76095, 71866, 76095, 16047, 50057, 79622, 92715, 36821, 73363, 65563, 87659, 69042, 26657, 58961, 77328, 96959, 12051, 68163, 91362, 57102, 24331, 92715, 30577, 39871, 63608, 30512, 66672, 49528, 49927, 35040, 66672, 80913, 33534, 64891, 86802, 36795, 77278, 30926, 56912, 76095, 30926, 71866, 47530, 36278, 75190, 46332, 65563, 35842, 33659, 34259, 57068, 68975, 42957, 19454, 92715, 73598, 22819, 38339, 39786, 58905, 33662, 19402, 39871, 90404, 36866, 22180, 47743, 33662, 66672, 92863, 33577, 65563, 39814, 67503, 19240, 53566, 44610, 83748, 66672, 65083, 30577, 26657, 36169, 95571, 19402, 13551, 41587, 80913, 30512, 92774, 80913, 95865, 44769, 33662, 66672, 31660, 58905, 30512, 60686, 76095, 71866, 23007, 35704, 44838, 44144, 36795, 34819, 86480, 94388, 47650, 30577, 74822, 22783, 76425, 97485, 99451, 45251, 76095, 86480, 82570, 23784, 80913, 61865, 22783, 26870, 43996, 33662, 39005, 23565, 36795, 30577, 33662, 21802, 53694, 56912, 68163, 93117, 42667, 95247, 71866, 43583, 86480, 35842, 66946, 49022, 47530, 42667, 93898, 30512, 53516, 56655, 60873, 50991, 70572, 33662, 19750, 23381, 47797, 27795, 21060, 81767, 35040, 35448, 30512, 35842, 65563, 42667, 66369, 11025, 65563, 19402, 21767, 86480, 76095, 71866, 42667, 39871, 65501, 33662, 34357, 10996, 95653, 30577, 19402, 73560, 26040, 32184, 66672, 26657, 30914, 84043, 64949, 58905, 42667, 78473, 12343, 12106, 26657, 19402, 77261, 86328, 57061, 30512, 55014, 10589, 22783, 51845, 92715, 25828, 99687, 98764, 39871, 34357, 79994, 76315, 76095, 70436, 69042, 76530, 42667, 74182, 68163, 27795, 30577, 30914, 61537, 13898, 61908, 99289, 40213, 77549, 19402, 30512, 92528, 39871, 31427, 95571, 33092, 75406, 86480, 34920, 68163, 55568, 88017, 84371, 61301, 26657, 35842, 36267, 80913, 15507, 82042, 77261, 42512, 88722, 33662, 35040, 92715, 95341, 66672, 88017, 66058, 21087, 80394, 99337, 61965, 58182, 31706, 62878, 32216, 30633, 54182, 87966, 23041, 99312, 55585, 30926, 19402, 26519, 32459, 95571, 70436, 25315, 26562, 46436, 32337, 86005, 95571, 70436, 46976, 66672, 94697, 22096, 69042, 91362, 42667, 19402, 82873, 92715, 19402, 22783, 20144, 27795, 53093, 86480, 26625, 33662, 30411, 61965, 16084, 63686, 15310, 21419, 44144, 14290, 33467, 33662, 65563, 14369, 42667, 47639, 61965, 87833, 15102, 36795, 99289, 34357, 49061, 74720, 12941, 68163, 27680, 80806, 76095, 27128, 17354, 40153, 29225, 68670, 20197, 18468, 46834, 57767, 78848, 89061, 87715, 33362, 82036, 71866, 86480, 19402, 93246, 74995, 65563, 39871, 78226, 52265, 65563, 27800, 58905, 43030, 78190, 85640, 99289, 10699, 53709, 16668, 99289, 36795, 21883, 22783, 57068, 39023, 98514, 35842, 63179, 19402, 26657, 86465, 13752, 35253, 77295, 39430, 98611, 14592, 87458, 92715, 54714, 97648, 44144, 18187, 66672, 64742, 62476, 69193, 50345, 79614, 85533, 57068, 75901, 56912, 13632, 68163, 86480, 36795, 92715, 35040, 22783, 78355, 11820, 53110, 34145, 83449, 95208, 30577, 86506, 99289, 33662, 36008, 26713, 58905, 66672, 42485, 63340, 56304, 99376, 37831, 81666, 92715, 85639, 63011, 50356, 71866, 62286, 23504, 27795, 66974, 77092, 56912, 36795, 42294, 30512, 26657, 30926, 81831, 66693, 93030, 37896, 27789, 80530, 36795, 34357, 84926, 47530, 97110, 34357, 32345, 26935, 30847, 27795, 40093, 56912, 70436, 77328, 50482, 65563, 61328, 72207, 90011, 23322, 46878];

function calculate_distance($firstList, $secondList) {
    sort($firstList, SORT_NUMERIC);
    sort($secondList, SORT_NUMERIC);
    $distance = 0;
    for ($i = 0; $i < count($firstList); $i++) {
        $distance += abs($firstList[$i] - $secondList[$i]);
    }
    return $distance;
}

$distance = calculate_distance($firstList, $secondList);

echo "Distance: $distance\n";

//Find the similarity score between the 2 lists

function calculate_similarity($firstList, $secondList) {

    $similarity = 0;
    $counts = array_count_values($secondList);
    foreach ($firstList as $item) {
        if (@$counts[$item]) {
            $similarity = $similarity + ($item * $counts[$item]);
        }
    }
    return $similarity;
}
$similarity_val = calculate_similarity($firstList, $secondList);

echo "Similarity: " . $similarity_val;
