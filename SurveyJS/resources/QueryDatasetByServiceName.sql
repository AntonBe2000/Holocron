select * from answers a
inner join answers b on a.survey_identifier = b.survey_identifier
where b.answer='df'